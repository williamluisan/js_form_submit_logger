<?php

    function pre($var)
    {
        echo "<pre>";
        print_r($var);
    }

    date_default_timezone_set('Asia/Makassar');
    $cur_time = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);

    // receive data with GET
    $get = $_GET;
    $log = "{$cur_time}";
    foreach($get as $k => $v) {
        $log .= " {$k}={$v}";
    }
    $log .= "\n";

    // is folder writeable
    if ( ! is_writable(getcwd())) {
        die('Current folder is not writeable.');
    }

    // put log into a file
    file_put_contents('log.txt', $log, FILE_APPEND);

