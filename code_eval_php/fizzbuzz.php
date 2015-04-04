<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-04
 * Time: 10:11 AM
 */

$input_file = fopen($argv[1], "r");
//echo fread($input_file, filesize($argv[1]));
$fizz_array = explode(" ", fread($input_file, filesize($argv[1])));

foreach ($fizz_array as $f) {
    echo "each: $f\n";

}

fclose($input_file);
echo "\n all done!";

