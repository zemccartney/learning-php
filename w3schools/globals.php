<?php

$z = "new var";

function dunks () {
    $z = 666;
    echo $z;
    // global declaration goes into affect at the point, top-to-bottom, where it's called
    // NOT LIKE FUNCTIONS IN JS, WHICH CAN BE WRITTEN ANYWHERE AND ARE BUMPED TO TOP OF CONTROL FLOW
    // This outputs local $z, then global $z;
    global $z;
    echo $z;
}

dunks();

// legal, just creates an empty var, like in JS
$fart; 

$fart = 'pizza';
echo "This is $fart";

function staticElec () {
    static $charge = 0.35;
    $charge++;
    echo $charge;
}

staticElec();
staticElec();
staticElec();

echo htmlspecialchars('<br />' . $GLOBALS['z']);

// PRINT VS. ECHO
// Only difference is that echo can take multiple parameters, but print 
// can take only 1
echo $z, $fart, dunks;
print dunks;