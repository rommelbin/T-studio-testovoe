<?php

namespace App\Observers;

use App\Models\Log\StudentLog;
use App\Models\Student;
use JetBrains\PhpStorm\ArrayShape;

class StudentObserver
{
    #[ArrayShape(["method" => "string", "student_name" => "string", "student_id" => "string"])]
    protected function prepareAttributesForStudentLog(array $students_data, string $method): array
    {
        return [
            "method" => $method,
            "student_name" => $students_data["name"],
            "student_id" => $students_data["id"],
        ];
    }
    /**
     * Handle the Student "created" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function created(Student $student)
    {
        $prepared_data = $this->prepareAttributesForStudentLog($student->attributesToArray(), "create");
        (new StudentLog($prepared_data))->save();
    }

    /**
     * Handle the Student "deleted" event.
     *
     * @param  \App\Models\Student  $student
     * @return void
     */
    public function deleted(Student $student)
    {
        $prepared_data = $this->prepareAttributesForStudentLog($student->attributesToArray(), "delete");
        (new StudentLog($prepared_data))->save();
    }
}
