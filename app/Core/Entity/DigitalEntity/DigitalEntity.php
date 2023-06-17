<?php

namespace App\Core\Entity\DigitalEntity;

use App\Core\Entity\Entity;
use Parental\HasParent;

class DigitalEntity extends Entity
{
    use HasParent;

    protected $fillable = [
        'name',
        'description',
        'url'
    ];
}
