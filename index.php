<?php

require_once 'Animals/Human.php';

$john = new Human('John', 19);

$johnArray = $john->toArray();
foreach ($johnArray as $key => $value) {
    echo "$key: $value<br>";
}
