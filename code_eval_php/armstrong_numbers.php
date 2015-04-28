<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-28
 * Time: 6:51 AM
 */


function get_armstrong($line) {

    $digit_array = str_split($line);

    $total = 0;

    $pow = sizeof($digit_array);

    foreach($digit_array as $digit) {
        $pow_res = pow($digit, $pow);
        $total += $pow_res;
    }

//    var_dump($total);
    return $total;

}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    if ($line == get_armstrong($line)) {
        echo 'True';
    }
    else {
        echo 'False';
    }

    echo "\n";
}
