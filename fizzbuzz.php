<?php
$val = $argv[1];

if ($val % 3 == 0 && $val % 5 == 0) {
  echo '*FizzBuzz*';
} elseif ($val % 2 == 0) {
  echo '*Fiz*';
} elseif ($val % 5 == 0) {
  echo '*Buzz*';
} else {
  echo "*$val*";
}