<?php

namespace App\Web\Entity;

use App\Core\Entity\EntityRepository;
use App\Http\Controller;
use App\Web\Entity\Requests\SearchEntityRequest;

class EntityController extends Controller 
{
    public function __construct(
        private EntityRepository $repository,
    ) {}

    public function index(SearchEntityRequest $request) {
        return view('entity.index', [
            'entities' => $this->repository->index($request->all())
        ]);
    }
}
