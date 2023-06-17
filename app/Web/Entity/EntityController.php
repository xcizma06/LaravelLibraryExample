<?php

namespace App\Web\Entity;

use App\Core\Entity\EntityRepository;
use App\Http\Controller;

class EntityController extends Controller 
{
    public function __construct(
        private EntityRepository $repository,
    ) {}

    public function index() {
        return view('entity.index', [
            'entities' => $this->repository->index()
        ]);
    }
}
