<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;

class PaymentController extends Controller
{

    public function __construct() {
        Configuration::setXenditKey("xnd_development_sCaEe5Kbt4QmYJ4jm5DfDyCld7o3OLrCbngXMKXrmkeAYZID4NGwRemgGTk4");
    }

    public function checkout()
    {
        Configuration::setXenditKey("xnd_development_sCaEe5Kbt4QmYJ4jm5DfDyCld7o3OLrCbngXMKXrmkeAYZID4NGwRemgGTk4");

        $apiInstance = new InvoiceApi();
        $create_invoice_request = new CreateInvoiceRequest([
          'external_id' => 'test1234',
          'description' => 'Test Invoice',
          'amount' => 10000,
          'invoice_duration' => 172800,
          'currency' => 'IDR',
          'reminder_time' => 1
        ]); 

        // dd($create_invoice_request);
        $result = $apiInstance->createInvoice($create_invoice_request);
            dd($result);
        
        try {
        } catch (\Xendit\XenditSdkException $e) {
            // dd('errror');
            //  dd($e->getMessage(), PHP_EOL);
          dd(json_encode($e->getFullError()), PHP_EOL);
        }

        dd('stooooop');
        return view('checkout', ['invoice' => $invoice]);
    }

    public function webhook(Request $request)
    {
        // Verifikasi tanda tangan notifikasi
        $signature = $request->header('x-xendit-signature');
        $isValid = Xendit::validSignature($request->getContent(), $signature);

        if ($isValid) {
            // Proses notifikasi pembayaran di sini
            // Misalnya, tandai pembayaran sebagai selesai
            // atau mengirim email konfirmasi kepada pelanggan
        } else {
            // Tanda tangan tidak valid, abaikan notifikasi
        }
    }

}
