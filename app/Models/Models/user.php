<?php

namespace App\Models\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Contracts\Auth\Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class user extends Authenticatable
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $table='users';

    protected $fillable=[

        'name',
        'email',
        'password',

        ];
   
}
