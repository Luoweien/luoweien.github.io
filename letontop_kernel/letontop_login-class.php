<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if (empty($_GET["user"]) || empty($_GET["pass"]) || strlen($_GET["user"]) > 12 || strlen($_GET["pass"]) > 12 || strpos(preg_replace($blacklist, "⨯", $_GET["user"]), '⨯') !== false || strpos(preg_replace($blacklistemil, "⨯", $_GET["pass"]), '⨯') !== false ) {
    $error = "0";
} else {
    if ($adminUser == $_GET['user'] && $adminPass == $_GET["pass"]) {
        $_SESSION['loginma'] = $tokens;
        $error = 'ok';
    } else {
        $error = "1";
    }
}
echo $error;