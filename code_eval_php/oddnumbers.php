<?php
/**
 * Created by PhpStorm.
 * User: Madison
 * Date: 15-04-08
 * Time: 7:48 AM
 */

$max_range = 99;

for ($i=1; $i<=$max_range; $i++) {
    if ($i % 2 !== 0) {
        echo "$i\n";
    }
}