<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-05-01
 * Time: 5:40 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $num_array = explode(' ', $line);

    $counts = array_count_values($num_array);

    $winner = false;

    foreach($counts as $num => $amt) {
        if ($amt === 1) {
            if (($winner == false) or ($num < $winner)) {
                $winner = $num;  // get the winning number

            }
        }
    }

    if ($winner) {

//        echo "winner: $winner\n";

        foreach($num_array as $pos => $n) {

//            echo "testing: $n, $pos\n";

            if ($n == $winner) {
                $win_pos = $pos + 1;
                echo "$win_pos\n";
            }
        }

    }
    else {
        echo "0\n";
    }

}
