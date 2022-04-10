<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        "name",
        "photo"
    ];

    public function belongsTo($related, $foreignKey = null, $ownerKey = null, $relation = null)
    {
        return StudentGroup::class;
    }
}
