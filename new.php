<?php

$vars = array('name' => 'Oscar the Grouch',
              'color' => 'green',
              'favorite_punctuation' => '#');

$query_string = http_build_query($var);
$url = 'muppetselect.php?' . $query_string;