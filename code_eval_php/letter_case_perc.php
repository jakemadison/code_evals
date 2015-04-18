<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-18
 * Time: 11:31 AM
 */


function get_perc_ratio($l) {

    $char_array = str_split($l);

    $lowercase = 0;
    $uppercase = 0;
    $total_len = sizeof($char_array);

    if ($total_len === 0) {
        return array(0,0);
    }

    foreach($char_array as $c) {
        if (ctype_alpha($c) and ctype_lower($c)) {
            $lowercase++;
        }
        elseif (ctype_alpha($c) and ctype_upper($c)) {
            $uppercase++;
        }
    }

//    echo "total len: $total_len, upper: $uppercase, lower: $lowercase\n";

    $lower_perc = $lowercase/$total_len*100;
    $upper_perc = $uppercase/$total_len*100;

    return array($lower_perc, $upper_perc);


}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    $res = get_perc_ratio($line);

    $res[0] = number_format((float)$res[0], 2, '.', '');
    $res[1] = number_format((float)$res[1], 2, '.', '');

    echo "lowercase: $res[0] uppercase: $res[1]";
    echo "\n";


}
