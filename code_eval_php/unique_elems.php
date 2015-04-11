<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-11
 * Time: 10:40 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $unique_num_array = array_unique(explode(',', $line));
    echo implode(',', $unique_num_array);
    echo "\n";

}
