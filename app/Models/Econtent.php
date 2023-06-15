<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Econtent extends Item
{
    use HasFactory;

    private const IDENTIFICATION = 'link';

    public function getLinkAttribute(): string
    {
        return $this->attributes[self::IDENTIFICATION];
    }

    public function getIdentification(): string
    {
        return $this->getLinkAttribute();
    }

    public function getIdentificationLabel(): string
    {
        return self::IDENTIFICATION;
    }

}
