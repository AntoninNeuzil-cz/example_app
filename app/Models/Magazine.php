<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Magazine extends Item
{
    use HasFactory;

    private const IDENTIFICATION = 'issn';

    public function getIssnAttribute(): string
    {
        return $this->attributes[self::IDENTIFICATION];
    }

    public function getIdentification(): string
    {
        return $this->getIssnAttribute();
    }

    public function getIdentificationLabel(): string
    {
        return self::IDENTIFICATION;
    }

}
