<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestSurvey extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'note', 'date', 'customer_id'];
}