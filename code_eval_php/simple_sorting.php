<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-09
 * Time: 7:58 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

function process_line($l) {

    $exploded_line = explode(" ", $l);
    sort($exploded_line, SORT_NUMERIC);

    return $exploded_line;
}

function print_with_precision($element, $key, $precision=3) {
    echo number_format((float)$element, $precision, '.', '');
    echo ' ';
}


foreach ($line_array as $line) {
    $line_res = process_line($line);
    array_walk($line_res, 'print_with_precision');
    echo "\n";

}
