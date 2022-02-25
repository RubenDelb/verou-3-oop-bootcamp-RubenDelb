<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

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

$student1 = new Student('Mia', 3);
$student2 = new Student('Gandalf', 9);
$student3 = new Student('Rowdy', 4);
$student4 = new Student('Svetlana', 7);
$student5 = new Student('Maurits', 5);
$student6 = new Student('Bartholomeus', 6);
$student7 = new Student('Sanne', 7);
$student8 = new Student('Marte', 8);
$student9 = new Student('Neo', 8);
$student10 = new Student('Snowflake', 10);

$group1 = new StudentGroup([$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10]);

$group1->getGroupInfo();
echo "<b>the average score of group 1 is: " . $group1->calculateAverageScore() . "</b><br><br><br><br>";

$student11 = new Student('Esmeralda', 4);
$student12 = new Student('Trinity', 8);
$student13 = new Student('Bulbasaur', 9);
$student14 = new Student('James', 2);
$student15 = new Student('Bella', 6);
$student16 = new Student('Dimitrov', 9);
$student17 = new Student('Abdulla', 3);
$student18 = new Student('Lilly', 9);
$student19 = new Student('Pauline', 8);
$student20 = new Student('Aristotle', 6);

$group2 = new StudentGroup([$student11, $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20]);

$group2->getGroupInfo();
echo "<b>the average score of group 2 is: " . $group2->calculateAverageScore() . "</b><br><br>";