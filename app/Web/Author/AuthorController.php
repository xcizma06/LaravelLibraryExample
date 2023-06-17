<?php

namespace App\Web\Author;

use App\Core\Author\AuthorRepository;
use App\Core\Author\AuthorService;
use App\Http\Controller;
use App\Web\Author\Requests\CreateAuthorRequest;

class AuthorController extends Controller 
{
    public function __construct(
        private AuthorRepository $repository,
        private AuthorService $service
    ) {}

    public function index() {
        return view('author.index', [
            'authors' => $this->repository->index()
        ]);
    }

    public function createForm() {
        return view('author.create');
    }
    
    public function create(CreateAuthorRequest $request) {
        $this->service->create($request->all());
        return redirect()->back()->with('success', __('New author created.'));
    }
}
