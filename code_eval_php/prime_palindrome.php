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

    if (array_reverse(str_split($n)) === str_split($n)) {
        return true;
    }
    else {
        return false;
    }

}


$start_point = 1000;
for ($i=$start_point; $i>0; $i--) {

    if (checkPrime($i) and isPalindrome($i)) {
        print "$i";
        break;
    }

}