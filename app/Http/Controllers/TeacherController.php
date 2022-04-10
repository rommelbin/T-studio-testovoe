<?php

namespace App\Http\Controllers;

use App\Services\TeacherService;
use JetBrains\PhpStorm\Pure;

class TeacherController extends Controller
{
    protected TeacherService $studentService;
    protected array $rules = [
        "name" => "string"
    ];
    #[Pure] public function __construct(TeacherService $service)
    {
        parent::__construct($service);
    }
}
