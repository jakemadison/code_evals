<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-12
 * Time: 4:07 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    list($array1, $array2) = explode(';', $line);

    $array1 = explode(',', $array1);
    $array2 = explode(',', $array2);

    $intersection_result = array_intersect($array1, $array2);
    echo implode(',', $intersection_result);
    echo "\n";

}
