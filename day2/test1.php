<?php

// find the surface area of the box, which is 2*l*w + 2*w*h + 2*h*l.
// The elves also need a little extra paper for each present: the area of the smallest side.

$input = file(__DIR__.'/input.txt');

$total = 0;
foreach ($input as $line) {
  list($height, $width, $length) = explode('x', $line);

  $sides = [
      ($width*$length),
      ($height*$length),
      ($height*$width)
  ];
  $sum = array_sum($sides);
  sort($sides);

  $result = (2 * ($sum)) + $sides[0];
  $total += $result;
}

echo 'RESULT: '.$total."\n";
