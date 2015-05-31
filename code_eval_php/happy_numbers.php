<?php
/**
 * Created by IntelliJ IDEA.
 * User: Madison
 * Date: 15-05-31
 * Time: 12:56 PM
 */



function get_happiness($number) {

    $used_nums = array();

    while(1) {
        $numbers = str_split($number);  // split string of number into array of its digits
        array_walk($numbers, 'intval');  // convert each digit to an int

        $sum = 0;
        foreach ($numbers as $n) {
            $sum += pow($n, 2);  // add up the sum of the squares of each digit
        }

        if ($sum === 1) {
            return 1;  // if 1, then we're good

        } elseif (in_array($sum, $used_nums)) {
            return 0;  //if we've seen this number before, it's bad
        }

        $used_nums[] = $sum;
        $number = (string)$sum;  // otherwise, add to our stack, and keep trying
    }

}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo get_happiness($line);
    echo "\n";


}

