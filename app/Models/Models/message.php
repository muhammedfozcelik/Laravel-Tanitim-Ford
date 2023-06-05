<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\messageController;

class message extends Model
{
    use HasFactory;
    protected $table='messages';

    protected $fillable=[

        'mesaj',
        'gonderici',
        'alici',



    ];
}
