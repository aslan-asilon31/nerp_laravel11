<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandMaster extends Model
{
    use HasFactory;

    
    protected $table = 'res_brands';
    protected $primaryKey = 'id';

    // protected $fillable = [
    //     'product_id',
    //     'status_id',
    //     'image_id',
    //     'name',
    //     'lang',
    //     'lang_id',
    // ];
    
}
