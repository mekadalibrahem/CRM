<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public const STATUS = ['open', 'in progress', 'pending', 'waiting client', 'blocked', 'closed'];
}
