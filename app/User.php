<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $guarded = ['*'];



    protected $hidden = [
        'password', 'remember_token',
    ];
    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    const HOME =1;
    protected $status = [
        1 =>[
            'name' => 'Public',
            'class' => 'btn btn-danger'
        ],
        0=>[
            'name' => 'Private',
            'class' => 'btn btn-primary'
        ]
    ];

    protected $home = [
        1 =>[
            'name' => 'Public',
            'class' => 'btn btn-danger'
        ],
        0=>[
            'name' => 'Private',
            'class' => 'btn btn-primary'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status,$this->active,'[N\A]');
    }
}
