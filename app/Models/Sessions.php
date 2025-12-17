<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sessions extends Model
{
    use SoftDeletes;

    protected $table = 'sessions';

    protected $fillable = [
        'id_user','token','expired_at'
    ];

    public function users_access()
    {
        return $this->belongsTo(UsersAccess::class, 'id_user');
    }
}
