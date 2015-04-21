<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-21
 * Time: 7:15 AM
 */

function truncateText($line) {

    $trunc_text = '... <Read More>';

    $line = substr($line, 0, 40);
    $space = strrpos($line, ' ');

    if ($space === false) {
        return $line;
    }

    $line = substr($line, 0, $space);
    return $line . $trunc_text;

}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    if (strlen($line) > 55) {
        echo truncateText($line);

    } else {
        echo $line;
    }

    echo "\n";

}
