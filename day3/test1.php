<?php

// Day 3, Test 1
$input = file_get_contents(__DIR__.'/input1.txt');

$delivered = [];
$x = 0;
$y = 0;

// Put our starting point in
$delivered[] = $x.','.$y;

for ($i = 0; $i < strlen($input); $i++) {
  $direction = $input[$i];
  if (empty($direction)) {
    continue;
  }

  switch($direction) {
    case '>':
      $x++;
      break;
    case '<':
      $x--;
      break;
    case '^':
      $y++;
      break;
    case 'v':
      $y--;
      break;
  }

  $location = $x.','.$y;
  
  if (!in_array($location, $delivered)) {
    $delivered[] = $location;
  }
}

echo 'delivered: '.count($delivered)."\n";
