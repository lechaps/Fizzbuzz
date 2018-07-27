<?php
function fizzbuzz($n) {
    $flag=true;
    if ($n % 3 == 0) {
      print("Fizz");
      $flag=false;
    }
    if ($num % 5 == 0) {
      print("Buzz");
      $flag=false;
    }
    if ($flag) print($n);
}
for ($i = 0; $i <=100; $i++)
{
    fizzbuzz($i);
}
