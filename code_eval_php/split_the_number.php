<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-27
 * Time: 6:37 PM
 */


function execute_operation($left, $right, $op) {


    $left = implode($left);
    $right = implode($right);

    if ($op === '+') {
        return $left + $right;
    }

    if ($op === '-') {
        return $left - $right;
    }

    return false;

}


function split_number($line) {
    list($source_number, $num_mask) = explode(' ', $line);

    $left_operand = array();
    $source_number = str_split($source_number);
    $num_mask = str_split($num_mask);

    foreach($num_mask as $key => $mask) {
        if ($mask === '+' or $mask === '-') {
//            take everything from here forward and execute a plus/minus on it

            return execute_operation($left_operand, array_slice($source_number, $key), $mask);
        }

        else {
            $left_operand[] = $source_number[$key];
        }

    }

    return false;

}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo split_number($line);
    echo "\n";
}
