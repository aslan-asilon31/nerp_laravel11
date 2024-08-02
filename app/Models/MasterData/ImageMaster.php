<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageMaster extends Model
{
    use HasFactory;

    protected $table = 'res_image';
    protected $primaryKey = 'id';
    protected $fillable = [];

    // protected $fillable = [
    //     'image_master_id',
    //     'product_id',
    //     'status_id',
    //     'category_id',
    //     'name',
    //     'image',
    //     'description',
    //     'lang',
    //     'lang_id',
    // ];
}
