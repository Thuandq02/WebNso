<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'player';

    protected $fillable = [
        'username',
        'password',
        'luong',
        'ninja',
        'topsk',
        'lock',
        'nap',
        'clanTerritoryId',
        'coin',
        'coin_old',
        'status',
        'phone',
        'nickname',
        'email',
        'nhomkhachhang',
        'ngaythamgia',
        'tongnap',
        'tongthang',
        'admin_web',
        'isOnline',
        'DiemDanh',
        'newAccount',
        'VND',
        'vip'
    ];

}
