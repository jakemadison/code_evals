<?php
/**
 * Created by IntelliJ IDEA.
 * User: Madison
 * Date: 15-05-25
 * Time: 9:47 PM
 */

function process_line($l) {

    $sum = 0;
    $decoded_line = json_decode($l, true);
//    var_dump($decoded_line);

    $items = $decoded_line["menu"]["items"];
//    var_dump($items);

    foreach ($items as $item) {
//        var_dump($item);

        if (!is_array($item)) {
            continue;
        }

        if (array_key_exists('label', $item)) {
//            var_dump($item);
            $sum += $item['id'];
        }

    }
    return $sum;
}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    print process_line($line);
    echo "\n";

}