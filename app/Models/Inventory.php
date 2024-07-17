<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventories';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_sales_id', 'id');
    }

    public function workspace()
    {
        return $this->belongsTo(Workspace::class, 'workspace_id', 'id');
    }



}
