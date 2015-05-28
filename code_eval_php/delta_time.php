<?php
/**
 * Created by IntelliJ IDEA.
 * User: Madison
 * Date: 15-05-27
 * Time: 7:05 PM
 */

date_default_timezone_set('America/New_York');


function process_line($l) {


    list($starttime, $endtime) = explode(' ', $l);

    $starttime = strtotime($starttime);
    $endtime = strtotime($endtime);

    $time_delta = abs($endtime - $starttime);

    $hours = (integer)($time_delta / 3600);
    $time_delta = $time_delta - $hours*3600;

    $minutes = (integer)($time_delta / 60);
    $time_delta = $time_delta - $minutes*60;
    $seconds = $time_delta;

    $time= array();
    if ($hours < 10) {
        $time[] = '0' . (string)$hours;
    } else {
        $time[] = (string)$hours;
    }

    if ($minutes < 10) {
        $time[] = '0' . (string)$minutes;
    } else {
        $time[] = (string)$minutes;
    }

    if ($seconds < 10) {
        $time[] = '0' . (string)$seconds;
    } else {
        $time[] = (string)$seconds;
    }

    $time = implode(':', $time);

    return $time;
}


$input_file = fopen($argv[1], "r");
$line_array = explode("\n", fread($input_file, filesize($argv[1])));
fclose($input_file);

foreach ($line_array as $line) {

    print process_line($line);
    echo "\n";

}