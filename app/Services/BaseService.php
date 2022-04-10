<?php

namespace App\Services;

use App\Interfaces\IRepository;
use App\Interfaces\IService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseService implements IService
{
    protected IRepository $repository;
    public function __construct(IRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getModel(int $id = null): Model|Collection
    {
        if (empty($id))
            return $this->repository->getAll();
        return $this->repository->getOne($id);
    }

    public function createModel(array $data): Model
    {
        return $this->repository->createModel($data);
    }

    public function updateModel(int $id, array $data): Model
    {
        return $this->repository->updateModel($id, $data);
    }

    public function deleteModel(int $id): bool
    {
        return $this->repository->deleteModel($id);
    }
}
