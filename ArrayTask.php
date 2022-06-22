<?php
/*
 * Find the first element in alphabetical order for an array of strings using a loop (without php array sorting functions).
 * For example, for this array: $a=['my','name','is','john','doe'];
 * the result should be 'doe'. Please try to use modern PHP 7.4/8.x features in solution
 */

$a = ['my','name','is','john','doe'];

/* First way to solve by loop */
/**
 * Find the first element in alphabetical order
 *
 * @param array $stringArray
 * @return string|bool
 */
function getFirstElemByAlphabetOrder(array $stringArray): string|bool
{
    $resultStr = false;

    if (count($stringArray)) {
        for ($i = 0, $iMax = count($stringArray); $i < $iMax; $i++) {
            $currentString = trim($stringArray[$i]);

            if (empty($resultStr)) {
                $resultStr = $currentString;
            } else {
                // compare first char in str
                if (isset($resultStr[0], $currentString[0]) &&
                    $resultStr[0] > $currentString[0]) {
                    $resultStr = $currentString;
                }
            }
        }
    }

    return $resultStr;
}

// show first result
var_dump(getFirstElemByAlphabetOrder($a));

/* Second way to solve by array_reduce */
$resultString = array_reduce(
    $a,
    static fn($current, $next) => isset($current, $next) &&
    substr(trim($current), 0, 1) < substr(trim($next), 0, 1) ? $current : $next
);

// show second result
var_dump($resultString);