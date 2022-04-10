<?php

namespace App\Repositories;
use App\Models\Student;
use JetBrains\PhpStorm\Pure;

class StudentRepository extends BaseRepository
{
    #[Pure] public function __construct(Student $model)
    {
        parent::__construct($model);
    }
}
