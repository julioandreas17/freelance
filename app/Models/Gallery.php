<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $table = 'gallery';

    protected $fillable = [
        'id_user','picture'
    ];

    public function users_access()
    {
        return $this->belongsTo(UsersAccess::class, 'id_user');
    }
}
