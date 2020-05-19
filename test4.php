<?php
date_default_timezone_set('Africa/Johannesburg');

$date = strtotime ('25 December 2020');

$xmas = ($date - time())/60/60/24;

echo ceil($xmas) . " Days left before Christmas.";

?>