<?php

namespace App\table;

use Illuminate\Database\Eloquent\Model;

class jobcontact extends Model
{







    protected $table = 'jobcontacts';


    protected $fillable = [
        'name', 'email', 'phone','typeofcontacts', 'message',

    ];


    protected $hidden = [
        'updated_at','created_at',
    ];




}
