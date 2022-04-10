<?php

namespace App\Services;

use App\Interfaces\IService;
use App\Repositories\CourseRepository;
use JetBrains\PhpStorm\Pure;

class CourseService extends BaseService implements IService
{
    #[Pure] public function __construct(CourseRepository $repository)
    {
        parent::__construct($repository);
    }
}
