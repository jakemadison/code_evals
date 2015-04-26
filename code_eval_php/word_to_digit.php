<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-26
 * Time: 9:59 AM
 */



$number_map = array('zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');



$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $elem_array = explode(';', $line);

    foreach($elem_array as $elem) {
        echo array_search($elem, $number_map);
    }

    echo "\n";
}
