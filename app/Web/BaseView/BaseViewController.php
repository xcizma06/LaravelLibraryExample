<?php

namespace App\Web\BaseView;

use App\Core\Entity\EntityRepository;
use App\Core\Author\AuthorRepository;
use App\Http\Controller;

class BaseViewController extends Controller 
{
    public function __construct(
        private EntityRepository $entityRepository,
        private AuthorRepository $authorRepository
    ) {}

    public function index() {
        return view('index', [
            'entityCount' => $this->entityRepository->all()->count(),
            'authorCount' => $this->authorRepository->all()->count()
        ]);
    }
}
