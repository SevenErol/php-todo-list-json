<?php

$string = file_get_contents('todo.json');

$tasks = json_decode($string);

header('Content-Type: application/json');
echo json_encode($tasks);
