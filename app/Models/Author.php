<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
      'full_name',
      'email',
    ];

    public function getFullNameAttribute(): string
    {
        return $this->attributes['full_name'];
    }

    public function getEmailAttribute(): string
    {
        return $this->attributes['email'];
    }

}
