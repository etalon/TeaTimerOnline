<?php

require_once("bubblesort_functions.php");

$unsorted = array(55, 47, 79, 27, 17, 47, 99, 74, 12, 34, 37, 21, 76, 54);

echo join(",", $unsorted);
echo "<hr/>";

$sorted = doSort($unsorted, SortMode::Descending);

echo "<hr/>";
echo join(",", $sorted);
