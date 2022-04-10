<?php

namespace App\Services;

use App\Repositories\TeacherRepository;
use JetBrains\PhpStorm\Pure;

class TeacherService extends BaseService
{
    #[Pure] public function __construct(TeacherRepository $repository)
    {
        parent::__construct($repository);
    }
}
