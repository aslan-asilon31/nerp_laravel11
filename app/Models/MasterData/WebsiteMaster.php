<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\workspace;


class WebsiteMaster extends Model
{
    use HasFactory;

    
    protected $table = 'website';
    protected $primaryKey = 'id';

    public function workspaces()
    {
        return $this->hasMany(Workspace::class, 'website_id');
    }

    // protected $fillable = [
    //     'product_id',
    //     'status_id',
    //     'image_id',
    //     'name',
    //     'lang',
    //     'lang_id',
    // ];
    
}
