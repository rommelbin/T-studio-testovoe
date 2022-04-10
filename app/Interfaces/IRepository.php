<?php

namespace App\Interfaces;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface IRepository
{
    public function getOne(int $id): Model;
    public function getAll(): Collection;
    public function createModel(array $data): Model;
    public function updateModel(int $id, array $data): Model;
    public function deleteModel(int $id): bool;
}
