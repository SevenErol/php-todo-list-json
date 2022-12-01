<?php

if (isset($_POST['task_index'])) {

    $task_index = $_POST['task_index'];

    $string = file_get_contents('todo.json');

    $tasks = json_decode($string);

    array_splice($tasks, $task_index, 1);

    $json_tasks = json_encode($tasks);

    file_put_contents('todo.json', $json_tasks);

    echo $json_tasks;
};
