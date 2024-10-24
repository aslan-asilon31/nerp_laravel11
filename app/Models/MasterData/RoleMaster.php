<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleMaster extends Model
{
    use  HasFactory;

    protected $table = 'res_roles';
    // protected $primaryKey = 'id';

    // protected $fillable = [
    //     'roles_id',
    //     'status_id',
    //     'name',
    //     'lang',
    //     'lang_id',
    // ];

    public function divisions()
    {
        return $this->hasMany(RoleMaster::class, 'parent_id');
    }
}
