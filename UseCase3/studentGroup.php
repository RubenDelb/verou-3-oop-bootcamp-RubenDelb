<?php
declare(strict_types=1);

class StudentGroup
{
    public array $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }
    
    public function getGroupInfo()
    {
        
        foreach ($this->students as $student) {
            echo "<i>{$student->name}</i> has a score of {$student->score} <br><br>";
        }
    }

    public function calculateAverageScore()
    {
        $totalScore = 0;
        foreach ($this->students as $student) {
            $totalScore += $student->score;
        }
        $averageScore = $totalScore / count($this->students);
        return $averageScore;
    }
}
