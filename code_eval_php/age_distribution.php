<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-04
 * Time: 12:00 PM
 */


function process_line($distribution_map, $err, $l) {

    if ($l < 0 or $l > 100) {
        return $err;
    }

    foreach($distribution_map as $k => $d) {
        if ($k < $l) {
            continue;
        }
        else {
            return $d;
        }
    }

    return true;
}

$err_msg = "This program is for humans";

$distribution_map = array(
    2 => 'Still in Mama\'s arms',
    4 => 'Preschool Maniac',
    11 => 'Elementary school',
    14 => 'Middle school',
    18 => 'High school',
    22 => 'College',
    65 =>'Working for the man',
    100 => 'The Golden Years'
);

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    print process_line($distribution_map, $err_msg, $line);
    echo "\n";

}