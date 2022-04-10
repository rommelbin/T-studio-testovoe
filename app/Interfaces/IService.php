<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface IService
{
    public function getModel(int $id = null) : Model|Collection;
    public function createModel(array $data): Model;
    public function updateModel(int $id, array $data): Model;
    public function deleteModel(int $id): bool;
}
