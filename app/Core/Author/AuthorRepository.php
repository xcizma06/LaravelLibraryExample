<?php

namespace App\Core\Author;

class AuthorRepository
{
    public function index() {
        return Author::latest()->paginate(20);
    }
}
