<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manage_permission extends Model
{
    use HasFactory;
   protected $fillable = ['group', 'name', 'status'];
   
}
