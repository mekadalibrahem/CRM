<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Project extends Model
{
    use HasFactory;
    public const STATUS = ['open', 'in progress', 'blocked', 'cancelled', 'completed'];

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'client_id',
        'deadline',
        'status',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function client():BelongsTo{
       return  $this->belongsTo(Client::class);
    }
    public function tasks():HasMany {
        return $this->hasMany(Task::class);
    }

   

}
