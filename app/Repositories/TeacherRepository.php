<?php

namespace App\Repositories;

use App\Models\Teacher;
use JetBrains\PhpStorm\Pure;

class TeacherRepository extends BaseRepository
{
    #[Pure] public function __construct(Teacher $model)
    {
        parent::__construct($model);
    }
}
