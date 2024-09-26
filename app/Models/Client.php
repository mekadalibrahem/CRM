<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name' ,
        'contact_email' ,
        'contact_phone_number',
        'company_name',
        'company_city',
        'compnay_zip',
        'compant_vat',
    ];


    public function projects() :HasMany {
        return  $this->hasMany(Project::class);
    }

    public function CompanyName(): Attribute {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
        );
    }

   public function tasks() :HasMany {
    return $this->hasMany(Task::class);
   }

    
}
