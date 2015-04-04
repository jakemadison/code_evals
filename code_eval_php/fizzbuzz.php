<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-04
 * Time: 10:11 AM
 */


function process_line($l) {

    $fizz_array = explode(" ", $l);
    $f_div = $fizz_array[0];
    $b_div = $fizz_array[1];
    $range_val = $fizz_array[2];
    $output_array = array();

    foreach (range(1, $range_val) as $r) {

        if ($r % $f_div == 0 and $r % $b_div == 0) {
            $output_array[] = 'FB';
        }
        elseif ($r % $f_div == 0) {
            $output_array[] = 'F';
        }
        elseif ($r % $b_div == 0) {
            $output_array[] = 'B';
        }
        else {
            $output_array[] = $r;
        }
    }
    return $output_array;
}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $result = process_line($line);
    echo implode(' ', $result);
    echo "\n";

}

