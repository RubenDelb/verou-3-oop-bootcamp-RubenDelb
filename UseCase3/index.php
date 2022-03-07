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
        'Mia' => new Student('Mia', 3),
        'Gandalf' => new Student('Gandalf', 9),
        'Rowdy' => new Student('Rowdy', 4),
        'Svetlana' => new Student('Svetlana', 7),
        'Maurits' => new Student('Maurits', 5),
        'Bartholomeus' => new Student('Bartholomeus', 6),
        'Sanne' => new Student('Sanne', 7),
        'Marte' => new Student('Marte', 8),
        'Neo' => new Student('Neo', 8),
        'Snowflake' => new Student('Snowflake', 10),
    ]
    );

// pre($group1);
// $group1->getGroupInfo();
// echo "<b>the average score of group 1 is: " . $group1->calculateAverageScore() . "</b><br><br><br><br>";

$group2 = new StudentGroup(
    [
        'Esmeralda' => new Student('Esmeralda', 4),
        'Trinity' => new Student('Trinity', 8),
        'Bulbasaur' => new Student('Bulbasaur', 9),
        'James' => new Student('James', 2),
        'Bella' => new Student('Bella', 6),
        'Dimitrov' => new Student('Dimitrov', 9),
        'Abdulla' => new Student('Abdulla', 3),
        'Lilly' => new Student('Lilly', 9),
        'Pauline' => new Student('Pauline', 8),
        'Aristotle' => new Student('Aristotle', 6),

    ]
    );

// $group2->getGroupInfo();
// echo "<b>the average score of group 2 is: " . $group2->calculateAverageScore() . "</b><b1r><br>";

function moveStudent($fromGroup, $toGroup, $index)
{
    array_push($toGroup->students, $fromGroup->students[$index]);
    unset($fromGroup->students[$index]);
}

moveStudent($group1, $group2, 'Maurits');
moveStudent($group2, $group1, 'Esmeralda');

// unset($group1->students[0]);

// pre($group1->students);
pre($group2->students);
// $group2->getGroupInfo();