<?php
/**
 * Finds numbers that is not repeated.
 * This function implementation skip the strings.
 *
 * @param $input array Numbers array
 * @return array
 */
function findSingle(array $input): array
{
	$countValues = [];
    foreach ($input as $number) {
        if(gettype($number) == 'integer' || gettype($number) == 'double') {
            $number = (string)$number;
            if(!array_key_exists($number, $countValues)) {
                $countValues[$number] = 1;
            } else {
                $countValues[$number] += 1;
            }
        }
    }

    $output = [];
    foreach ($countValues as $number => $value) {
        if($value == 1) {
            if(gettype($number) != 'integer' && gettype($number) != 'double') {
                $number = (double)$number;
            }
            array_push($output, $number);
        }
    }

    return $output;
}

print_r(findSingle([1, 2, 3, 4, 1, 2, 3]));
// Array
// (
//     [0] => 4
// )


print_r(findSingle([11, 21, 33.4, 18, 21, 33.39999, 33.4]));
// Array
// (
//     [0] => 11
//     [1] => 33.39999
//     [2] => 18
// )
