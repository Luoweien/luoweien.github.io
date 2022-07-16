<?php
error_reporting(0);
ini_set('date.timezone', 'Asia/Shanghai');
$visitarr = date('Y/m/d h:i:s') . ' REMOTE_ADDR ' . $_SERVER['REMOTE_ADDR'] . ' PHP_SELF ' . $_SERVER['PHP_SELF'] . ' SCRIPT_NAME ' . $_SERVER['SCRIPT_NAME'] . ' REQUEST_URI ' . $_SERVER['REQUEST_URI'] . ' REQUEST_METHOD ' . $_SERVER['REQUEST_METHOD'] . 'HTTP_USER_AGENT ' . $_SERVER['HTTP_USER_AGENT'] . ' SCRIPT_FILENAME ' . $_SERVER['SCRIPT_FILENAME'] . ' SCRIPT_FILENAME ' . $_SERVER['SCRIPT_FILENAME'] . ' REMOTE_PORT ' . $_SERVER['REMOTE_PORT'] . ' PHP_AUTH_DIGEST ' . $_SERVER['PHP_AUTH_DIGEST'] . ' HTTP_ACCEPT_ENCODING ' . $_SERVER['HTTP_ACCEPT_ENCODING'] . ' HTTP_ACCEPT_LANGUAGE ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . ' HTTP_CONNECTION ' . $_SERVER['HTTP_CONNECTION'] . ' HTTP_HOST ' . $_SERVER['HTTP_HOST'] . ' HTTP_REFERER ' . $_SERVER['HTTP_REFERER'] . ' HTTPS ' . $_SERVER['HTTPS'] . ' PHP_AUTH_DIGEST ' . $_SERVER['PHP_AUTH_DIGEST'] . ' PHP_AUTH_USER ' . $_SERVER['PHP_AUTH_USER'] . ' PHP_AUTH_PW ' . $_SERVER['PHP_AUTH_PW'] . ' PATH_TRANSLATED ' . $_SERVER['PATH_TRANSLATED'] . ' PATH_INFO ' . $_SERVER['PATH_INFO'] . ' AUTH_TYPE ' . $_SERVER['AUTH_TYPE'] . ' ORIG_PATH_INFO ' . $_SERVER['ORIG_PATH_INFO'] . ' REDIRECT_REMOTE_USER ' . $_SERVER['REDIRECT_REMOTE_USER'] . ' REMOTE_HOST ' . $_SERVER['REMOTE_HOST'] . ' argv ' . $_SERVER['argv'] . ' argc ' . $_SERVER['argc'] . ' GATEWAY_INTERFACE ' . $_SERVER['GATEWAY_INTERFACE'] . ' SERVER_NAME ' . $_SERVER['SERVER_NAME'] . ' SERVER_SOFTWARE ' . $_SERVER['SERVER_SOFTWARE'] . ' SERVER_PROTOCOL ' . $_SERVER['SERVER_PROTOCOL'] . ' QUERY_STRING ' . $_SERVER['QUERY_STRING'] . ' DOCUMENT_ROOT ' . $_SERVER['DOCUMENT_ROOT'] . ' SERVER_ADMIN ' . $_SERVER['SERVER_ADMIN'] . ' SERVER_PORT ' . $_SERVER['SERVER_PORT'] . ' SERVER_SIGNATURE ' . $_SERVER['SERVER_SIGNATURE'] . "\r" . "\n";
if (!is_Dir($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/")) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/", 0755, true);
}
if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt")) {
    $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt", "w");
    fclose($myfile);
} else {
    $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt", "r");
    $myfiless = fread($myfile, filesize($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt"));
    fclose($myfile);
}
$url = $_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt";
$GLOBALS['logmax'] = 100;
if(filesize($url)/1024/1024 >= $logmax){
    $to = $siteemal;
    $subject = "「" . $sitename . "」visit.txt";
    $message = 'Visit.txt >='.round(filesize($url)/1024/1024,2).'Mb. Stop Logging! Please release';
    $from = "「 . $sitename . " . $L['emailmessageheaders'];
    $headers = "From: $from";
    mail($to, $subject, $message, $headers);
}else{
    $myfile = fopen($_SERVER['DOCUMENT_ROOT'] . "/letontop_log/visit.txt", "w");
    fwrite($myfile, $myfiless . $visitarr);
    fclose($myfile);
}
$vistlogs = date('Y/m/d h:i:s') . '<br>REMOTE_ADDR===' . $_SERVER['REMOTE_ADDR'] . '<br>PHP_SELF===' . $_SERVER['PHP_SELF'] . '<br>SCRIPT_NAME===' . $_SERVER['SCRIPT_NAME'] . '<br>REQUEST_URI===' . $_SERVER['REQUEST_URI'] . '<br>REQUEST_METHOD===' . $_SERVER['REQUEST_METHOD'] . 'HTTP_USER_AGENT===' . $_SERVER['HTTP_USER_AGENT'] . '<br>SCRIPT_FILENAME===' . $_SERVER['SCRIPT_FILENAME'] . '<br>SCRIPT_FILENAME===' . $_SERVER['SCRIPT_FILENAME'] . '<br>REMOTE_PORT===' . $_SERVER['REMOTE_PORT'] . '<br>PHP_AUTH_DIGEST===' . $_SERVER['PHP_AUTH_DIGEST'] . '<br>HTTP_ACCEPT_ENCODING===' . $_SERVER['HTTP_ACCEPT_ENCODING'] . '<br>HTTP_ACCEPT_LANGUAGE===' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '<br>HTTP_CONNECTION===' . $_SERVER['HTTP_CONNECTION'] . '<br>HTTP_HOST===' . $_SERVER['HTTP_HOST'] . '<br>HTTP_REFERER===' . $_SERVER['HTTP_REFERER'] . '<br>HTTPS===' . $_SERVER['HTTPS'] . '<br>PHP_AUTH_DIGEST===' . $_SERVER['PHP_AUTH_DIGEST'] . '<br>PHP_AUTH_USER===' . $_SERVER['PHP_AUTH_USER'] . '<br>PHP_AUTH_PW===' . $_SERVER['PHP_AUTH_PW'] . '<br>PATH_TRANSLATED===' . $_SERVER['PATH_TRANSLATED'] . '<br>PATH_INFO===' . $_SERVER['PATH_INFO'] . '<br>AUTH_TYPE===' . $_SERVER['AUTH_TYPE'] . '<br>ORIG_PATH_INFO===' . $_SERVER['ORIG_PATH_INFO'] . '<br>REDIRECT_REMOTE_USER===' . $_SERVER['REDIRECT_REMOTE_USER'] . '<br>REMOTE_HOST===' . $_SERVER['REMOTE_HOST'] . '<br>argv===' . $_SERVER['argv'] . '<br>argc===' . $_SERVER['argc'] . '<br>GATEWAY_INTERFACE===' . $_SERVER['GATEWAY_INTERFACE'] . '<br>SERVER_NAME===' . $_SERVER['SERVER_NAME'] . '<br>SERVER_SOFTWARE===' . $_SERVER['SERVER_SOFTWARE'] . '<br>SERVER_PROTOCOL===' . $_SERVER['SERVER_PROTOCOL'] . '<br>QUERY_STRING===' . $_SERVER['QUERY_STRING'] . '<br>DOCUMENT_ROOT===' . $_SERVER['DOCUMENT_ROOT'] . '<br>SERVER_ADMIN===' . $_SERVER['SERVER_ADMIN'] . '<br>SERVER_PORT===' . $_SERVER['SERVER_PORT'] . '<br>SERVER_SIGNATURE===' . $_SERVER['SERVER_SIGNATURE'] . "\r" . "\n";
