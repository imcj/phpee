<?php
$search = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

assert(binary_search(1, $search) == 0);
assert(binary_search(2, $search) == 1);
assert(binary_search(3, $search) == 2);
assert(binary_search(4, $search) == 3);
assert(binary_search(5, $search) == 4);
assert(binary_search(6, $search) == 5);
assert(binary_search(7, $search) == 6);
assert(binary_search(8, $search) == 7);
assert(binary_search(9, $search) == 8);
assert(binary_search(10, $search) == 9);

function binary_search($needle, $haystack, $low = -1, $hight = -1)
{
    if ($low > $hight) return -1;
    if (-1 == $low) $low = 0;
    if (-1 == $hight) $hight = count($haystack);

    $middle = $low + intval(($hight - $low) / 2);

    if ($haystack[$middle] > $needle)
        return binary_search($needle, $haystack, $low, $middle - 1);
    else if ($haystack[$middle] < $needle)
        return binary_search($needle, $haystack, $middle + 1, $hight);
    else
        return $middle;
}