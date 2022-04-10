<?php

namespace App\Http\Controllers;

use App\Interfaces\IController;
use App\Interfaces\IService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

abstract class Controller extends BaseController implements IController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected IService $service;
    protected array $rules;
    public function __construct(IService $service)
    {
        $this->service = $service;
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $this->service->createModel($validator->validated());
    }
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, int $id): Model
    {
        $validator = Validator::make($request->all(), $this->rules);
        return $this->service->updateModel($id, $validator->validated());
    }

    public function delete(int $id)
    {
        $this->service->deleteModel($id);
    }

    public function get(int $id = null): Model|Collection
    {
        return $this->service->getModel($id);
    }
}
