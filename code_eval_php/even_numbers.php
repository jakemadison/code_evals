<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-24
 * Time: 6:54 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    if ($line % 2 == 0) {
        echo "1\n";
    }
    else {
        echo "0\n";
    }

}
