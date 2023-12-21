<?php
/*TODO: 
Talk about pass by reference
*/

function rotateArrayByN(array $elements, int $n): array {
	print_r($elements);
	print_r($n);
}

$array = [1,2,3,4,5];
print_r(rotateArrayByN($array,3));
print_r(rotateArrayByN($array,5));
print_r(rotateArrayByN($array,7));

?>