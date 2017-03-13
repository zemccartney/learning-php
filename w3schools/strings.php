<?php

$example = "Postcone Jones";

#echo strlen($example);


# prints with info about types and values
// var_dump(str_word_count($example, 1));

# just prints
// print_r(str_word_count($example, 1));



// strpos returns false if needle not found
$booly = strpos($example, 'anoos');

echo $booly;
if ( $booly == true ) {
    echo 'meat';
}