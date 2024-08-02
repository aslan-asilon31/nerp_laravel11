<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MasterData\PriceMaster;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product_sales';
    
    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'product_sales_id', 'id');
    }
    
    public function prices()
    {
        return $this->hasMany(PriceMaster::class, 'product_id', 'id');
    }
    

}
