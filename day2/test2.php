<?php

// Day 2, test 2

$input = file(__DIR__.'/input2.txt');
$total = 0;

foreach ($input as $line) {
  $line = trim($line);
  if (empty($line)) {
    continue;
  }
  $parts = explode('x', $line);;
  sort($parts);
  
  list($height, $width, $length) = $parts;

  $presentWrap = ($width * 2) + ($height * 2);
  $presentBow = $width * $height * $length;

  $result = ($presentWrap + $presentBow);
  $total += $result;
}

echo 'RESULT: '.$total."\n";
