<?php

namespace App\Services;

use App\Repositories\StudentGroupeCourseWithTeacherRepository;
use JetBrains\PhpStorm\Pure;

class StudentGroupeCourseWithTeacherService extends BaseService
{
    #[Pure] public function __construct(StudentGroupeCourseWithTeacherRepository $repository)
    {
        parent::__construct($repository);
    }
}
