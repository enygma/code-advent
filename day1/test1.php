<?php

$input = file_get_contents(__DIR__.'/input.txt');

$floor = 0;

// $input = '())';

/**
 * (()) and ()() both result in floor 0.
 * ((( and (()(()( both result in floor 3.
 * ))((((( also results in floor 3.
 * ()) and ))( both result in floor -1 (the first basement level).
 * ))) and )())()) both result in floor -3.
 */

for ($i = 0; $i <= strlen($input); $i++) {
  if (!isset($input[$i])) {
    continue;
  }
  if ($input[$i] == '(') {
    $floor = $floor + 1;
  } else if ($input[$i] == ')') {
    $floor = $floor - 1;
  }
}

echo 'FLOOR: '.$floor."\n";
