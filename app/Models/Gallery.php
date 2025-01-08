<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Define the table (optional if it's the same as the model name)
    protected $table = 'galleries';

    // Allow mass assignment for these fields
    protected $fillable = ['image', 'description'];
}
