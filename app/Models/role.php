<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = [
        'User_Type_ID',
        'Division',
        'Role_Name',
        'Role_Status'
    ];
}
