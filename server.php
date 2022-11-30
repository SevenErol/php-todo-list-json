<?php


$string = file_get_contents('todo.json');

$tasks = json_decode($string);

if (isset($_POST['task'])) {

    $task = $_POST['task'];

    array_push($tasks, $task);

    $json_tasks = json_encode($tasks);

    file_put_contents('todo.json', $json_tasks);
};

header('Content-Type: application/json');
echo json_encode($tasks);
