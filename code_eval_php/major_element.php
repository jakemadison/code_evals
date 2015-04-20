<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-20
 * Time: 7:51 AM
 */


function getMajorElement($line) {


    $num_array = explode(',', $line);
    $l_val = count($num_array)/2;
    $count_array = array_count_values($num_array);

    arsort($count_array);
    $first = key($count_array);

//    print_r($count_array);
//    echo "str len: $l_val first key: $first  : first val: $count_array[$first]  :";

    if ($count_array[$first] > $l_val) {
        return $first;
    } else {
      return 'None';
    }


}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo getMajorElement($line);
    echo "\n";

}
