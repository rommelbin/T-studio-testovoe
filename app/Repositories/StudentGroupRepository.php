<?php

namespace App\Repositories;

use App\Models\StudentGroup;
use JetBrains\PhpStorm\Pure;

class StudentGroupRepository extends BaseRepository
{
    #[Pure] public function __construct(StudentGroup $model)
    {
        parent::__construct($model);
    }
}
