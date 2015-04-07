<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-07
 * Time: 7:21 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {
    $line_sum = array_sum(str_split($line));
    echo $line_sum;
    echo "\n";
}
