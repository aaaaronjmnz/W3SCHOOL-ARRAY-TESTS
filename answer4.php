<?php
$x = [1, 2, 3, 4, 5];
print_r($x);
array_splice($x, 2, 1); //deletes array x element [2] which is actually integer 3.
print_r($x);
