<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
function deldir($path)
{
    if (is_dir($path)) {
        $p = scandir($path);
        if (count($p) > 2) {
            foreach ($p as $val) {
                if ($val != "." && $val != "..") {
                    if (is_dir($path . $val)) {
                        deldir($path . $val . '/');
                    } else {
                        unlink($path . $val);
                    }
                }
            }
        }
    }
    return rmdir($path);
}
$checkupdata = curl_init();
curl_setopt($checkupdata, CURLOPT_URL, "http://leton.top/check.php?a=" . $_SERVER['HTTP_HOST'].'&b='.$siteInfo_Version);
curl_setopt($checkupdata, CURLOPT_HEADER, 0);
curl_exec($checkupdata);
curl_close($checkupdata);

if ($_GET['a'] == 'delete') {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/install/';
    deldir($path);
    $file = $_SERVER['DOCUMENT_ROOT'] . "/letontop_kernel/deleteinstall.php";
    @unlink ($file);
    $md = $_SERVER['DOCUMENT_ROOT'] . "/README.md";
    @unlink ($md);
    header("location:/");
}