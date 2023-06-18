<?php

namespace App\Core\Entity\BookEntity;

class BookEntityService 
{
    public function create(array $data) {
        $entity = new BookEntity();
        $entity->fill($data);
        $entity->author()->associate($data['author']);

        $entity->save();
    }

    public function update(BookEntity $entity, array $data) {
        $entity->fill($data);
        $entity->save();
    }
    
    public function delete(BookEntity $entity) {
        $entity->delete();
    }
}
