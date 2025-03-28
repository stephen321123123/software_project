<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'name', 
        'image', 
        'description', 
        'url', 
        'organization_type', 
        'contact', 
        'email',
    ];
}
