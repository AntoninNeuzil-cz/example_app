<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Item
{
    use HasFactory;

    private const IDENTIFICATION = 'isbn';


    public function getIsbnAttribute(): string
    {
        return $this->attributes[self::IDENTIFICATION];
    }

    public function getIdentification(): string
    {
        return $this->getIsbnAttribute();
    }

    public function getIdentificationLabel(): string
    {
        return self::IDENTIFICATION;
    }

}
