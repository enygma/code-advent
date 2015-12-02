<?php

$input = file_get_contents(__DIR__.'/input1.txt');

$floor = 0;
$firstBasement = null;

for ($i = 0; $i <= strlen($input); $i++) {
  if (!isset($input[$i])) {
    continue;
  }
  if ($input[$i] == '(') {
    $floor = $floor + 1;
  } else if ($input[$i] == ')') {
    $floor = $floor - 1;
  }
  if ($floor < 0 && $firstBasement == null) {
    $firstBasement = $i;
  }
}

echo 'FLOOR: '.$floor." - (".($firstBasement-1).")\n";
