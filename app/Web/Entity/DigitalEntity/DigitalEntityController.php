<?php

namespace App\Web\Entity\DigitalEntity;

use App\Core\Author\AuthorRepository;
use App\Core\Entity\DigitalEntity\DigitalEntity;
use App\Core\Entity\DigitalEntity\DigitalEntityService;
use App\Http\Controller;
use App\Web\Entity\DigitalEntity\Requests\CreateDigitalEntityRequest;
use App\Web\Entity\DigitalEntity\Requests\UpdateDigitalEntityRequest;

class DigitalEntityController extends Controller 
{
    public function __construct(
        private AuthorRepository $authorRepository,
        private DigitalEntityService $service
    ) {}

    public function view(DigitalEntity $entity) {
        return view('entity.digital.view', [
            'entity' => $entity
        ]);
    }

    public function createForm() {
        return view('entity.digital.create', [
            'authors' => $this->authorRepository->all()
        ]);
    }
    
    public function create(CreateDigitalEntityRequest $request) {
        $this->service->create($request->all());
        return redirect()->back()->with('success', __('New digital entity added.'));
    }

    public function updateForm(DigitalEntity $entity) {
        return view('entity.digital.update', [
            'entity' => $entity
        ]);
    }
    
    public function update(DigitalEntity $entity, UpdateDigitalEntityRequest $request) {
        $this->service->update($entity, $request->all());
        return redirect()->back()->with('success', __('Digital entity successfully updated.'));
    }
    
    public function delete(DigitalEntity $entity) {
        $this->service->delete($entity);
        return redirect()->back()->with('success', __('Digital entity removed.'));
    }
}
