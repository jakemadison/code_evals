<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-04
 * Time: 2:12 PM
 */


function checkPrime($n) {

    if($n == 1) {
        return false;
    }

    if($n == 2) {
        return true;
    }

    if($n % 2 == 0) {
        return false;
    }

    for($i = 3; $i <= ceil(sqrt($n)); $i = $i + 2) {
        if($n % $i == 0) {
            return false;
        }
    }

    return true;
}



function isPalindrome($n) {


}



function process_line($line) {


    echo "prime: $line\n";
}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {
    process_line($line);
    echo "\n";

}