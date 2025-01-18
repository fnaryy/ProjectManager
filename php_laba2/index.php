<?php
include 'Task.php';
include 'Project.php';

$task1 = new Task("Создать макет", "Разработать макет сайта.<br>");
$task2 = new Task("Написать код", "Реализовать логику сайта.<br>");
$task3 = new Task("Тестирование", "Проверить функциональность сайта.<br>");

$task1->setStatus("В процессе");
echo $task1->getStatus() . "<br>";

$project = new Project("Веб-сайт");
$project->addTask($task1);
$project->addTask($task2);
$project->addTask($task3);

echo $project . "<br>";

foreach ([$task1, $task2, $task3] as $task) {
    echo $task . "<br>";
}
?>
