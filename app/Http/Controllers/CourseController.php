<?php

namespace App\Http\Controllers;


use App\Services\CourseService;
use JetBrains\PhpStorm\Pure;

class CourseController extends Controller
{
    protected CourseService $studentService;
    protected array $rules = [
        "course_name" => "string"
    ];
    #[Pure] public function __construct(CourseService $service)
    {
        parent::__construct($service);
    }
}
