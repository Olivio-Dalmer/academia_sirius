<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Task extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['title', 'description', 'status'];

    protected static $logAttributes = ['title', 'description', 'status'];
    protected static $logName = 'task';
}

