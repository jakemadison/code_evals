<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-04
 * Time: 1:28 PM
 */

function process_line($line) {

    if ($line === '') {
        return false;
    }

    $line_array = explode(' ', $line);
    return implode(' ', array_reverse($line_array));
}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {
    print process_line($line);
    echo "\n";

}