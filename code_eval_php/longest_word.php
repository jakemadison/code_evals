<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-29
 * Time: 6:13 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);


foreach ($line_array as $line) {

    $max_word = '';
    $word_array = explode(' ', $line);

    foreach($word_array as $word) {
        if (strlen($word) > strlen($max_word)) {
            $max_word = $word;
        }
    }
    echo "$max_word\n";

}
