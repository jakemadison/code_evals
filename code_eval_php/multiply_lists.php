<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-22
 * Time: 7:37 AM
 */


function multiplyList($line) {

    list($left_elements, $right_elements) = explode('|', $line);

    $left_elements = trim($left_elements);
    $right_elements = trim($right_elements);

    $left_elements = explode(' ', $left_elements);
    $right_elements = explode(' ', $right_elements);

//    print_r($left_elements);
//    print_r($right_elements);


    $result_list = array();

    foreach($left_elements as $left_key => $left_value) {
        $result_list[] = $left_value * $right_elements[$left_key];
    }

    return implode(' ', $result_list);

}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo multiplyList($line);
    echo "\n";
//    break;

}
