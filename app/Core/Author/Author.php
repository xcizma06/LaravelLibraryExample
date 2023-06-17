<?php

namespace App\Core\Author;

use App\Core\Entity\Entity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
    ];

    public function getFullNameAttribute(): string {
        return $this->name . ' ' . $this->surname;
    }

    public function entities() {
        return $this->hasMany(Entity::class);
    }
}
