<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements IRepository
{
    protected Model $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getOne($id): Model
    {
        return $this->model::findOrFail($id);
    }

    public function getAll(): Collection
    {
        return $this->model::all();
    }

    public function createModel(array $data): Model
    {
        $this->model::create($data)->save();
        return $this->model;
    }

    public function updateModel(int $id, array $data): Model
    {
        $this->model = $this->getOne($id);
        $this->model->update($data);
        $this->model->save();

        return $this->model;
    }

    public function deleteModel(int $id): bool
    {
        $this->model = $this->getOne($id);
        return $this->model->delete();
    }
}
