<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'path'
    ];
}
