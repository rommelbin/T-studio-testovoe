<?php

namespace App\Models;

use App\Interfaces\IFilterService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroupeCourseWithTeacher extends Model implements IFilterService
{
    use HasFactory;

    protected $fillable = [
        "duration",
        "course_id",
        "teacher_id",
        "status"
    ];

    public function courses(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Course::class);
    }

    public function teachers(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function filter()
    {
        // TODO: Implement filter() method.
    }

    public function prepare()
    {
        // TODO: Implement prepare() method.
    }
}
