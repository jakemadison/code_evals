<?php
/**
 * Created by IntelliJ IDEA.
 * User: Madison
 * Date: 15-06-01
 * Time: 7:38 PM
 */



function process_line($line) {

    return ucwords($line);

}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo process_line($line);
    echo "\n";


}

