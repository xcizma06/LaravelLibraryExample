<?php

namespace App\Core\Entity\MagazineEntity;

class MagazineEntityService 
{
    public function create(array $data) {
        $entity = new MagazineEntity();
        $entity->fill($data);
        $entity->author()->associate($data['author']);

        $entity->save();
    }

    public function update(MagazineEntity $entity, array $data) {
        $entity->fill($data);
        $entity->save();
    }
    
    public function delete(MagazineEntity $entity) {
        $entity->delete();
    }
}
