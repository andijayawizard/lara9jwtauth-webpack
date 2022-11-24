<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSurvey extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'tools', 'access', 'duration', 'perbaikan', 'description', 'saran', 'date', 'budget', 'image', 'customer_id', 'user_id'];
}