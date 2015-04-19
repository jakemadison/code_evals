<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-19
 * Time: 12:08 PM
 */


function find_the_writer($source, $instruction_set) {

    $char_array = str_split($source);
    $instruction_set = explode(' ', $instruction_set);

    foreach($instruction_set as $instruction) {
        echo $char_array[$instruction-1];
    }

}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    list($source, $instruction_set) = explode('|', $line);
    find_the_writer($source, $instruction_set);
    echo "\n";


}
