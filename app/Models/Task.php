<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    public const STATUS = ['open', 'in progress', 'pending', 'waiting client', 'blocked', 'closed'];

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'client_id',
        'project_id',
        'deadline',
        'status',

    ];


    public function project():BelongsTo {
        return $this->belongsTo(Project::class);
    }
    public function client():BelongsTo {
        return $this->belongsTo(Client::class);
    }
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array {
        return [
            'deadline' => 'datetime:m/d/Y'
        ];
    }
}
