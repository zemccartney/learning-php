<?php

# Odd example; variable within a string is detected as a variable
# GOTCHA: text of the pattern $ + string that you intend to be strings
# will be interpreted as variables unless you escape the $
$duggles = 'cinco';

echo "I grub me some $duggles!";
echo "I love \$variable";
