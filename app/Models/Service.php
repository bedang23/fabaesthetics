<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'id', 'title','content','slug','category','seotitle','seodescription','featured_image','created_at','updated_at'];
}
