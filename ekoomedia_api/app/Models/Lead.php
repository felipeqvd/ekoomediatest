<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['lead_name', 
        'lead_email', 
        'lead_nickname',
        'lead_cellphone',
        'lead_age'
    ];

    use HasFactory;
}
