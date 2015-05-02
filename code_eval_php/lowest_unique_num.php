<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-05-01
 * Time: 5:38 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $num_array = explode(' ', $line);

    $counts = array_count_values($num_array);

    var_dump($counts);


}
