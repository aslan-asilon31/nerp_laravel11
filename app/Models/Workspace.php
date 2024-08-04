<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;
use App\Models\MasterData\WebsiteMaster;

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

    // Relasi ke model Website
    public function website()
    {
        return $this->belongsTo(WebsiteMaster::class, 'website_id');
    }

    
    // public function inventories()
    // {
    //     return $this->hasMany(Inventory::class, 'workspace_id', 'id');
    // }

}
