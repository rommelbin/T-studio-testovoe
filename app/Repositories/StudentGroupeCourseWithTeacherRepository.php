<?php

namespace App\Repositories;

use App\Models\StudentGroupeCourseWithTeacher;
use JetBrains\PhpStorm\Pure;

class StudentGroupeCourseWithTeacherRepository extends BaseRepository
{
    #[Pure] public function __construct(StudentGroupeCourseWithTeacher $model)
    {
        parent::__construct($model);
    }

}
