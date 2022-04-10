<?php

namespace App\Http\Controllers;

use App\Services\StudentGroupService;
use JetBrains\PhpStorm\Pure;

class StudentGroupController extends Controller
{
    protected StudentGroupService $studentGroupService;
    protected array $rules = [
        "group_name" => "required|string",
        "course_id" => "integer"
    ];
    #[Pure] public function __construct(StudentGroupService $service)
    {
        parent::__construct($service);
    }
}
