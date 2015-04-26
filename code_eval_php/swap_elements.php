<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-25
 * Time: 5:03 PM
 */



function swapElements($line) {

    list($source_items, $instruction_set) = explode(':', $line);

    $source_items = trim($source_items);
    $instruction_set = trim($instruction_set);

    $instruction_set = explode(', ', $instruction_set);
    $source_items = explode(' ', $source_items);
    $container = null;

    foreach($instruction_set as $instruction) {
        list($left, $right) = explode('-', $instruction);
        $container = $source_items[$left];
        $source_items[$left] = $source_items[$right];
        $source_items[$right] = $container;
    }

    return implode(' ', $source_items);

}




$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    echo swapElements($line);
    echo "\n";

}
