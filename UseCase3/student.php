<?php
declare(strict_types=1);

class Student
{
    public string $name;
    public int $score;

    public function __construct(string $name, int $score)
    {
        $this->name = $name;
        $this->score = $score;
    }

    public function getStudentInfo()
    {
        return "{$this->name} has a score of {$this->score}";
    }
}
