<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-15
 * Time: 7:06 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $word_array = explode(' ', $line);

    $p_word_array = array_slice($word_array, -2, 1);
    $p_word = $p_word_array[0];
    echo "$p_word\n";



}
