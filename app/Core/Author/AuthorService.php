<?php

namespace App\Core\Author;

class AuthorService 
{
    public function create(array $data) {
        $author = new Author();
        $author->fill($data);
        $author->save();
    }
}
