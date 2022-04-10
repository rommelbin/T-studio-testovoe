<?php

namespace App\Repositories;

use App\Models\Course;
use JetBrains\PhpStorm\Pure;

class CourseRepository extends BaseRepository
{
    #[Pure] public function __construct(Course $model)
    {
        parent::__construct($model);
    }
}
