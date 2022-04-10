<?php

namespace App\Services;

use App\Repositories\StudentGroupRepository;
use JetBrains\PhpStorm\Pure;

class StudentGroupService extends BaseService
{
    #[Pure] public function __construct(StudentGroupRepository $repository)
    {
        parent::__construct($repository);
    }
}
