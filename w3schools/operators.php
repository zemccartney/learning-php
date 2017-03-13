<?php
// DOESN'T WORK FOR YOU
// EXPONENTIATION WAS INTRODUCED IN PHP 5.6
#echo 5 ** 3;
// echo 6 % 7;

// when modulo returns first operand, that means divisor > dividend
// $j = 5;
// returns 5
// echo $j--;
// returns 4
// echo "<br />" . $j;

$ty = false;
$cinco = true;


// How useful is this?
// Why isn't this in JS?
if ($ty xor $cinco) {
  echo "LOGIC";
}

$dang = "deedle";

$slang = "fart";

$dang .= $slang;
echo $dang;

// How Union works:
// attempts to combine arrays
// array 1 will take precedence over array 2
// wherever array 1 has a filled index, keep that value
// wherever array 2 has a filled index beyond array 1's length, append that value to array 1
$arry = array(1,2,3);
$mkl = array("blunt", 6, false, "gaddlic");
$union = $arry + $mkl;
var_dump($union);

$arry2 = array(1,true, true);
// This evaluates to true; WATCH OUT!!
if ($arry == $arry2) {
  echo "MEAT";
}

$result = array_merge($arry, $mkl);
// NOTE true is coerced to 1, its corresponding numeric value...WHY?
// false is coerced to empty...null?
print_r($result);
