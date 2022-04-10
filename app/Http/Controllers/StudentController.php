<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Services\StudentService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class StudentController extends Controller
{
    protected StudentService $studentService;
    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function create(StudentRequest $request)
    {
        $data = $request->validated();
        $this->studentService->createModel($data);
    }

    public function update(StudentRequest $request, int $id): Model
    {
        $data = $request->validated();
        return $this->studentService->updateModel($id, $data);
    }

    public function delete(int $id)
    {
        $this->studentService->deleteModel($id);
    }

    public function get(int $id = null): Model|Collection
    {
        return $this->studentService->getModel($id);
    }
}
