<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'minimum_acceptable',
        'function',
        'job_id',
    ];
}
