<?php

namespace App\Services;

use App\Repositories\StudentRepository;
use JetBrains\PhpStorm\Pure;

class StudentService extends BaseService
{
    #[Pure] public function __construct(StudentRepository $repository)
    {
        parent::__construct($repository);
    }
}
