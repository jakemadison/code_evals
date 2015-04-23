<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-23
 * Time: 7:26 AM
 */


function findHiddens($line) {

    $char_array = str_split($line);
    $secret_message = array();
    $valid_letters = range('a', 'j');

    foreach ($char_array as $chr) {
        if (ctype_alpha($chr) and ctype_lower($chr) and in_array($chr, $valid_letters)) {
            $secret_message[] = ord($chr)-97;
        }
        elseif (ctype_digit($chr)) {
            $secret_message[] = $chr;
        }
    }

    if (sizeof($secret_message) === 0) {
        return 'NONE';
    }

   return implode('', $secret_message);

}

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo findHiddens($line);
    echo "\n";
//    break;


}
