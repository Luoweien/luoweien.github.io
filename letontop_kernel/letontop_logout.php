<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
@session_start();
$_SESSION['tokens'] = null;
$_SESSION['loginma'] = 0;
echo '<script>';
echo "sessionStorage.setItem('windows','9');";
echo "top.location.href = 'javascript:history.back(-1)';";
echo '</script>';
