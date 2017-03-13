<?php

#var_dump($GLOBALS['_COOKIE']);

#var_dump(555);


#$firstArray = array(1,"malooey", "cinco");
// when dumping strings, var_dump displays type(string length) string value
// vs. numbers, where it displays just type(value)
#var_dump($firstArray);

#var_dump("strang");


class Car {
    function Car() {
        $this->model = "VW";
    }

}

// create an object
$herbie = new Car();


// show object properties
echo $herbie->model;

