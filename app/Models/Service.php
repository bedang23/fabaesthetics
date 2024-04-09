<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'id', 'title','short_desc','long_desc','url','seotitle','seodesc','created_at','updated_at'];
}
