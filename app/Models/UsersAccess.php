<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersAccess extends Model
{
    use SoftDeletes;

    protected $table = 'users_access';

    protected $fillable = [
        'name','email','phone','password','status'
    ];

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'id_user');
    }
}
