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

require "./student.php";
require "./studentGroup.php";

$group1 = new StudentGroup(
    [
        new Student('Mia', 3),
        new Student('Gandalf', 9),
        new Student('Rowdy', 4),
        new Student('Svetlana', 7),
        new Student('Maurits', 5),
        new Student('Bartholomeus', 6),
        new Student('Sanne', 7),
        new Student('Marte', 8),
        new Student('Neo', 8),
        new Student('Snowflake', 10),
    ]
    );

// pre($group1);
// $group1->getGroupInfo();
// echo "<b>the average score of group 1 is: " . $group1->calculateAverageScore() . "</b><br><br><br><br>";

$group2 = new StudentGroup(
    [
        new Student('Esmeralda', 4),
        new Student('Trinity', 8),
        new Student('Bulbasaur', 9),
        new Student('James', 2),
        new Student('Bella', 6),
        new Student('Dimitrov', 9),
        new Student('Abdulla', 3),
        new Student('Lilly', 9),
        new Student('Pauline', 8),
        new Student('Aristotle', 6),
    ]
    );

// $group2->getGroupInfo();
// echo "<b>the average score of group 2 is: " . $group2->calculateAverageScore() . "</b><b1r><br>";

function moveStudent($fromGroup, $toGroup)
{
    array_push($toGroup->students, $fromGroup->students[0]);
    unset($fromGroup->students[0]);
}

moveStudent($group1, $group2);

// unset($group1->students[0]);

pre($group1->students);
pre($group2->students);
// $group2->getGroupInfo();