<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class PriceMaster extends Model
{
    use HasFactory;

    protected $table = 'res_prices';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
