<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-17
 * Time: 7:44 AM
 */

$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

$slang_array = array(
                    ', yeah!',
                    ', this is crazy, I tell ya.',
                    ', can U believe this?',
                    ', eh?',
                    ', aw yea.',
                    ', yo.',
                    '? No way!',
                    '. Awesome!'
                    );

$punctuation_array = array('.','!','?');

$every_other_flag = false;
$slang_index = 0;

foreach ($line_array as $line) {

    $char_array = str_split($line);

    foreach ($char_array as $char) {

        if (in_array($char, $punctuation_array)) {

            if ($every_other_flag) {
                echo $slang_array[$slang_index];
                $slang_index = ($slang_index<sizeof($slang_array) ? ++$slang_index : 0);
                $every_other_flag = false;

            } else {
                echo $char;
                $every_other_flag = true;
            }
        } else {
            echo $char;
        }
    }
    echo "\n";
}
