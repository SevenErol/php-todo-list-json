<?php

if (isset($_POST['title'])) {

    $task = $_POST['title'];

    $string = file_get_contents('todo.json');

    $tasks = json_decode($string);

    array_push($tasks, $task);

    $json_tasks = json_encode($tasks);

    file_put_contents('todo.json', $json_tasks);

    echo $json_tasks;
};
