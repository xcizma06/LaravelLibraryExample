<?php

namespace App\Web\Entity\BookEntity;

use App\Core\Author\AuthorRepository;
use App\Core\Entity\BookEntity\BookEntity;
use App\Core\Entity\BookEntity\BookEntityService;
use App\Http\Controller;
use App\Web\Entity\BookEntity\Requests\CreateBookEntityRequest;
use App\Web\Entity\BookEntity\Requests\UpdateBookEntityRequest;

class BookEntityController extends Controller 
{
    public function __construct(
        private AuthorRepository $authorRepository,
        private BookEntityService $service
    ) {}

    public function view(BookEntity $entity) {
        return view('entity.book.view', [
            'entity' => $entity
        ]);
    }

    public function createForm() {
        return view('entity.book.create', [
            'authors' => $this->authorRepository->all()
        ]);
    }
    
    public function create(CreateBookEntityRequest $request) {
        $this->service->create($request->all());
        return redirect()->back()->with('success', __('New book added.'));
    }

    public function updateForm(BookEntity $entity) {
        return view('entity.book.update', [
            'entity' => $entity
        ]);
    }
    
    public function update(BookEntity $entity, UpdateBookEntityRequest $request) {
        $this->service->update($entity, $request->all());
        return redirect()->back()->with('success', __('Book successfully updated.'));
    }
    
    public function delete(BookEntity $entity) {
        $this->service->delete($entity);
        return redirect()->back()->with('success', __('Book removed.'));
    }
}
