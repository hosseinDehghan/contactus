<?php

namespace Hosein\Contactus;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=[
        'id','name','family','email','message'
    ];
}
