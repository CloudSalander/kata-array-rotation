<?php
/*TODO:
Not working with n > array size. 
Talk about pass by reference
What if I want to do it to the right?
*/

function rotateArrayByN(array $elements, int $n): array {
	$new_indexes = calcNewIndexes($elements,$n);
	print_r($new_indexes);
	return $new_indexes;
}

function calcNewIndexes(array $elements, int $n): array {
	$new_indexes = [];
	foreach ($elements as $key => $element) {
		$new_key = $key - $n;
		if($new_key < 0) $new_key = count($elements) + ($new_key % (count($elements)));
		$new_indexes[] = $new_key;
	}
	foreach ($new_indexes as $key => $n) {
			$aux = $elements[$n];
			$elements[$n] = $elements[$key];
			$elements[$key] = $elements[$n]; 
	}
	return $elements;
}




$array = [1,2,3,4,5];
rotateArrayByN($array,3);
rotateArrayByN($array,1);
rotateArrayByN($array,2);

?>