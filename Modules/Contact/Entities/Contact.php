<?php

namespace Modules\Contact\Entities;
use Eloquent;

class Contact extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'subject', 'message','seen'
    ];


}
