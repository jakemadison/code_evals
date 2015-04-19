<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-19
 * Time: 12:45 PM
 */


function isSelfDescribing($line) {
    $num_array = str_split($line);

    foreach($num_array as $index => $num) {
        $num_count = substr_count($line, $index);
        if ($num_count != $num) {
            return 0;
        }
    }
    return 1;

}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo isSelfDescribing($line);
    echo "\n";



}
