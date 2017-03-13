<?php

define("MKL", "has 3 letters in it");

$pizza = 5;
var_dump($pizza);
function globby () {
  // $pizza is included in the GLOBALS array
  // For this script, because $pizza is declared outside any function, it is a global in this context
  // So, it shows up at the end of the globals array
  var_dump($GLOBALS);
  global $pizza;
  echo "<br />" . $pizza;
  echo "<br />";
  echo "<br />" . MKL;
}

globby();
