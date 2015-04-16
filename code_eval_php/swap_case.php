<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-16
 * Time: 7:28 AM
 */


function switch_case($char, $k) {

    if (ctype_alpha($char)) {

        if (ctype_lower($char)) {
            echo strtoupper($char);
        }
        else {
            echo strtolower($char);
        }

    }

    else {
        echo $char;
    }

}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $char_array = str_split($line);

    array_walk($char_array, 'switch_case');
    echo "\n";



}
