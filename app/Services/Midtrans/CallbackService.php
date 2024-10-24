<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Config;
use App\Models\Order;
use App\Services\Midtrans\Midtrans;
use Midtrans\Notification;
 
 
class Midtrans {
    protected $serverKey;
    protected $isProduction;
    protected $isSanitized;
    protected $is3ds;
 
    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isProduction = config('midtrans.is_production');
        $this->isSanitized = config('midtrans.is_sanitized');
        $this->is3ds = config('midtrans.is_3ds');
 
        $this->_configureMidtrans();
    }
 
    public function _configureMidtrans()
    {
        Config::$serverKey = $this->serverKey;
        Config::$isProduction = $this->isProduction;
        Config::$isSanitized = $this->isSanitized;
        Config::$is3ds = $this->is3ds;
    }
}

class CallbackService extends Midtrans
{
    protected $notification;
    protected $order;
    protected $serverKey;
 
    public function __construct()
    {
        parent::__construct();
 
        $this->serverKey = config('midtrans.server_key');
        $this->_handleNotification();
    }
 
    public function isSignatureKeyVerified()
    {
        return ($this->_createLocalSignatureKey() == $this->notification->signature_key);
    }
 
    public function isSuccess()
    {
        $statusCode = $this->notification->status_code;
        $transactionStatus = $this->notification->transaction_status;
        $fraudStatus = !empty($this->notification->fraud_status) ? ($this->notification->fraud_status == 'accept') : true;
 
        return ($statusCode == 200 && $fraudStatus && ($transactionStatus == 'capture' || $transactionStatus == 'settlement'));
    }
 
    public function isExpire()
    {
        return ($this->notification->transaction_status == 'expire');
    }
 
    public function isCancelled()
    {
        return ($this->notification->transaction_status == 'cancel');
    }
 
    public function getNotification()
    {
        return $this->notification;
    }
 
    public function getOrder()
    {
        return $this->order;
    }
 
    protected function _createLocalSignatureKey()
    {
        $orderId = $this->order->number;
        $statusCode = $this->notification->status_code;
        $grossAmount = $this->order->total_price;
        $serverKey = $this->serverKey;
        $input = $orderId . $statusCode . $grossAmount . $serverKey;
        $signature = openssl_digest($input, 'sha512');
 
        return $signature;
    }
 
    protected function _handleNotification()
    {
        $notification = new Notification();
 
        $orderNumber = $notification->order_id;
        $order = Order::where('number', $orderNumber)->first();
 
        $this->notification = $notification;
        $this->order = $order;
    }
}