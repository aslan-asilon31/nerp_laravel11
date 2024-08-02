<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Workspace extends Model
{
    use HasFactory;

    protected $table = 'workspace';

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'workspace_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class, 'workspace_id', 'id');
    }
    
    // public function inventories()
    // {
    //     return $this->hasMany(Inventory::class, 'workspace_id', 'id');
    // }

}
