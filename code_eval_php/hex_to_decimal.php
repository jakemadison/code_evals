<?php
/**
 * Created by IntelliJ IDEA.
 * User: Madison
 * Date: 15-05-28
 * Time: 9:49 PM
 */



$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $hex = hexdec($line);
    echo $hex;
    echo "\n";


}