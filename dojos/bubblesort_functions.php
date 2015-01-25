<?php

abstract class SortMode
{
    const Ascending = 0;
    const Descending = 1;
}

function doSort($arr, $sortMode)
{

    $size_of_array = sizeof($arr);

    for ($i = $size_of_array - 1; $i >= 0; $i--) {

        for ($j = $size_of_array - 1; $j > $size_of_array - 1 - $i; $j--) {

            if (hasToSwitchValues($arr[$j], $arr[$j - 1], $sortMode)) {

                $buf = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $buf;

            }

        }

    }

    return $arr;

}

function hasToSwitchValues($val1, $val2, $sortMode)
{

    switch ($sortMode) {
        case SortMode::Ascending:
            return ($val1 < $val2);
        case SortMode::Descending:
            return ($val1 > $val2);
        default:
            die(printf("Ungültiger Sortiermodus '%s' wurde angegeben!", $sortMode));

    }
}
