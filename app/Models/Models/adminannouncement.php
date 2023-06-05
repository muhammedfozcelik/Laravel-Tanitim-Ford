<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\adminannouncementcontroller;


class adminannouncement extends Model
{
    use HasFactory;
    protected $table='announcements';

    protected $fillable=[
        'title',
        'content',


    ];
}
