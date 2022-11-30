<?php

$string = file_get_contents('todo.json');

$tasks = json_decode($string);
