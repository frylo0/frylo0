<?php 

function start_minimize() {
    ob_start();
}

function end_minimize() {
    echo trim(preg_replace('/[\n\s]+/', ' ', ob_get_clean()));
}