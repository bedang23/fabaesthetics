<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'id',
        'username',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
     public static function doLogin($username,$password)
    {

        $admin = self::where('username',$username)
                           ->where('password',$password)
                           ->get()->toArray();
        return $admin;
    }
}
