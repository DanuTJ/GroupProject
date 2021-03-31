<?php
function logger($log){

    //replace the log.txt file path with the directory you prefer.
    // it is not advised to keep this file inside the project folder due to security reason

    if(!file_exists('log.txt')){
        file_put_contents('log.txt','');
    }

    $ip = $_SERVER['REMOTE_ADDR']; //Client IP
    date_default_timezone_set('Asia/Colombo');
    $time = date('m/d/y h:iA', time());

    $contents = file_get_contents('log.txt');
    $contents .= "$ip\t$time\t$log\r";

    file_put_contents('log.txt',$contents);
}