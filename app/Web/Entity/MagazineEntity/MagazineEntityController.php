<?php

namespace App\Web\Entity\MagazineEntity;

use App\Core\Author\AuthorRepository;
use App\Core\Entity\MagazineEntity\MagazineEntity;
use App\Core\Entity\MagazineEntity\MagazineEntityService;
use App\Http\Controller;
use App\Web\Entity\MagazineEntity\Requests\CreateMagazineEntityRequest;
use App\Web\Entity\MagazineEntity\Requests\UpdateMagazineEntityRequest;

class MagazineEntityController extends Controller 
{
    public function __construct(
        private AuthorRepository $authorRepository,
        private MagazineEntityService $service
    ) {}

    public function view(MagazineEntity $entity) {
        return view('entity.magazine.view', [
            'entity' => $entity
        ]);
    }

    public function createForm() {
        return view('entity.magazine.create', [
            'authors' => $this->authorRepository->all()
        ]);
    }
    
    public function create(CreateMagazineEntityRequest $request) {
        $this->service->create($request->all());
        return redirect()->back()->with('success', __('New magazine added.'));
    }

    public function updateForm(MagazineEntity $entity) {
        return view('entity.magazine.update', [
            'entity' => $entity
        ]);
    }
    
    public function update(MagazineEntity $entity, UpdateMagazineEntityRequest $request) {
        $this->service->update($entity, $request->all());
        return redirect()->back()->with('success', __('Magazine successfully updated.'));
    }
    
    public function delete(MagazineEntity $entity) {
        $this->service->delete($entity);
        return redirect()->back()->with('success', __('Magazine removed.'));
    }
}
