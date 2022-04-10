<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected StudentService $studentService;
    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function update(Request $request, int $id)
    {
//        TODO Request validation
        return $this->studentService->updateModel($id, $request->all());
    }

    public function delete(Request $request,int $id)
    {
        $this->studentService->deleteModel($id);
    }

    public function get(Request $request, int $id = null)
    {
        return $this->studentService->getModel($id);
    }

    public function create(Request $request)
    {
        //        TODO Request validation
        $this->studentService->createModel($request->all());
    }
}
