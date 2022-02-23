<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $guarded = [];

    /*
     * added the result
     */
    public function addResult($grade)
    {
        if ($grade > $this->best_grade) {
            $this->best_grade = $grade;
            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
            }
            $this->save();
        }
    }
}
