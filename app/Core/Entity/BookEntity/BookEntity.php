<?php

namespace App\Core\Entity\BookEntity;

use App\Core\Entity\Entity;
use Parental\HasParent;

class BookEntity extends Entity
{
    use HasParent;

    protected $fillable = [
        'name',
        'description',
        'isbn'
    ];
}
