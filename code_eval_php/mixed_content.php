<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-30
 * Time: 6:36 PM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $word_array = explode(',', $line);
    $output_nums = array();
    $output_words = array();

    foreach($word_array as $word) {
        if (ctype_digit($word)) {
            $output_nums[] = $word;
        }
        else {
            $output_words[] = $word;
        }
    }

    $output_words = implode(',',$output_words);
    $output_nums = implode(',',$output_nums);

    if (strlen($output_nums) and strlen($output_words)) {
        echo $output_words . '|' . $output_nums;
    }
    elseif (strlen($output_nums)) {
        echo $output_nums;
    }
    elseif (strlen($output_words)) {
        echo $output_words;
    }

    echo "\n";

}
