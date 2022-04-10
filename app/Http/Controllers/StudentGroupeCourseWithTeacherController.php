<?php

namespace App\Http\Controllers;


use App\Services\StudentGroupeCourseWithTeacherService;
use JetBrains\PhpStorm\Pure;

class StudentGroupeCourseWithTeacherController extends Controller
{

    protected StudentGroupeCourseWithTeacherService $studentService;
    protected array $rules = [
        "name" => "string"
    ];
    #[Pure] public function __construct(StudentGroupeCourseWithTeacherService $service)
    {
        parent::__construct($service);
    }
}
