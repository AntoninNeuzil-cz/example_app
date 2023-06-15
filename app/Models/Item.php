<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    private const IDENTIFICATION = 'id';

    protected $fillable = [
        'id',
        'name',
        'description',
        'type',
        'isbn',
        'issn',
        'link',
        'author_id',
    ];

    public function getNameAttribute(): string
    {
        return $this->attributes['name'];
    }

    public function getDescriptionAttribute(): string
    {
        return $this->attributes['description'];
    }

    public function getTypeAttribute(): string
    {
        return \ucfirst($this->attributes['type']);
    }

    public function getAuthorIdAttribute(): string
    {
        return $this->attributes['author_id'];
    }

    public function getIdentification(): string
    {
        return $this->attributes[self::IDENTIFICATION];
    }

    public function getIdentificationLabel(): string
    {
        return self::IDENTIFICATION;
    }


    public function author(): Author
    {
        return Author::where('id', $this->getAuthorIdAttribute())->first();
    }
}
