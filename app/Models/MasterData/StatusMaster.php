<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMaster extends Model
{
    use HasFactory;

    protected $table = 'res_status';
    protected $primaryKey = 'id';

    protected $fillable = [
        'roles_id',
        'status_id',
        'name',
        'lang',
        'lang_id',
    ];
    
}
