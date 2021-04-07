<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // public $table = 'theposts'; #To change the default table
    protected $fillable = [
        'title',
        'body'
    ];

   
}