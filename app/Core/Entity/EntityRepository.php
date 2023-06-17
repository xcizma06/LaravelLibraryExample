<?php

namespace App\Core\Entity;

class EntityRepository
{
    public function index() {
        return Entity::latest()->paginate(20);
    }
}
