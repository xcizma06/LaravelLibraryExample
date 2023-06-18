<?php

namespace App\Core\Entity;

class EntityRepository
{
    public function index(array $data) {
        if (isset($data['search']))
            return Entity::where('name', 'LIKE', '%'.$data['search'].'%')->latest()->paginate(20);

        return Entity::latest()->paginate(20);
    }

    public function all() {
        return Entity::all();
    }
}
