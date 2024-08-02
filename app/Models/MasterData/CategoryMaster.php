<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMaster extends Model
{
    use HasFactory;

    protected $table = 'res_categories';
    protected $primaryKey = 'id';
}
