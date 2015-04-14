<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-13
 * Time: 3:33 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    list($string, $char) = explode(',', $line);

    $position = strrpos($string, $char);

    if ($position) {
        echo "$position\n";
    };

}
