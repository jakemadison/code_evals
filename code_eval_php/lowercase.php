<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-06
 * Time: 6:37 PM
 */


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {
    print strtolower($line);
    echo "\n";

}
