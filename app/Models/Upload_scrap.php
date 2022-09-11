<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload_scrap extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'scrap_category',
        'scrap_type',
        'weight',
        'time',
        'images',
        'price',
        'approval_code',
        'collector_code',
    ];
}
