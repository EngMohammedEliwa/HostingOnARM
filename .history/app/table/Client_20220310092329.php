<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{














    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
