<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\StudentService;
use JetBrains\PhpStorm\Pure;

class StudentController extends Controller
{
    protected StudentService $studentService;
    protected array $rules = [
        "name" => "required|string",
        "photo" => "required|string",
        "student_group" => "integer"
    ];
    #[Pure] public function __construct(StudentService $service)
    {
        parent::__construct($service);
    }
}
