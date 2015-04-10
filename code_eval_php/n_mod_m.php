<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-10
 * Time: 7:48 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    list($n, $m) = explode(',', $line);
    $remainder = $n - (floor(($n/$m))*$m);
    echo $remainder;
    echo "\n";

}
