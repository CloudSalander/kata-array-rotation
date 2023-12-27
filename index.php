<?php
/*TODO:
Do it with a single array?
What if I want to do it to the right?
*/

function rotateArrayByN(array $elements, int $n): array {
	$new_indexes = calcNewIndexes($elements,$n);
	$rotated_array = [];
	foreach ($new_indexes as $key => $n) {	
		$rotated_array[$n] = $elements[$key];
		ksort($rotated_array);
	}
	return $rotated_array;
}

function calcNewIndexes(array $elements, int $n): array {
	$new_indexes = [];
	$normalized_n = $n % count($elements); 			//Prevent n greater than array length
	foreach ($elements as $key => $element) {
		$new_key = $key - $normalized_n;
		if($new_key < 0) $new_key = count($elements) + $new_key; 
		$new_indexes[] = $new_key;
	}
	return $new_indexes;
}

$array = [1,2,3,4,5];
print_r(rotateArrayByN($array,51));
print_r(rotateArrayByN($array,1));
print_r(rotateArrayByN($array,2));
print_r(rotateArrayByN($array,3));

?>