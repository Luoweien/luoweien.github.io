<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};

if ($_GET['id'] == 'bj') {
    $backimg = $_SERVER['DOCUMENT_ROOT'] . '/content/sys/background-up.jpg';
    !unlink($backimg);
    $backgroundimage = '';
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';
} else {
    $backgroundimage = $backimg;
}
if ($_GET['id'] == 'tx') {
    $avatarimg = $_SERVER['DOCUMENT_ROOT'] . '/content/sys/useravatar-up.jpg';
    !unlink($avatarimg);
    $avatarimage = '';
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';
} else {
    $avatarimage = $userimg;
}
if ($_GET['id'] == 'qr') {
    $qrimg = $_SERVER['DOCUMENT_ROOT'] . '/content/sys/qrcode.png';
    !unlink($qrimg);
    $qrimage = '';
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';
} else {
    $qrimage = $qrcode;
}
if ($_GET['id'] == 'visit') {
    $qrimg = $_SERVER['DOCUMENT_ROOT'] . '/letontop_log/visit.txt';
    !unlink($qrimg);
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';
}
if ($_GET['id'] == 'login') {
    $qrimg = $_SERVER['DOCUMENT_ROOT'] . '/letontop_log/login.txt';
    !unlink($qrimg);
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';
}

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><siteSettings/>');
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站关键词');
$siteSetting->addChild('sitekeys', $sitekeys);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站描述');
$siteSetting->addChild('sitedesc', $sitedesc);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站名称');
$siteSetting->addChild('sitename', $sitename);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '分隔号');
$siteSetting->addChild('sitesige', $sitesige);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '文章数量');
$siteSetting->addChild('postnum', $postnum);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '顶栏颜色');
$siteSetting->addChild('topcolo', $topcolo);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '毛玻璃');
$siteSetting->addChild('topmosh', $topmosh);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '主颜色');
$siteSetting->addChild('maincol', $maincol);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '背景图片');
$siteSetting->addChild('backimg', $backgroundimage);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '背景链接');
$siteSetting->addChild('backurl', $backurl);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '个人头像');
$siteSetting->addChild('userimg', $avatarimage);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '头像链接');
$siteSetting->addChild('userurl', $userurl);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '昵称');
$siteSetting->addChild('usernic', $usernic);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站签名');
$siteSetting->addChild('siteaugr', $siteaugr);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '二维码');
$siteSetting->addChild('qrcode', $qrimage);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '二维码地址');
$siteSetting->addChild('qrcodurl', $qrcodurl);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '当前定位');
$siteSetting->addChild('siteimap', $siteimap);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '邮箱');
$siteSetting->addChild('siteemal', $siteemal);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '顶栏置顶');
$siteSetting->addChild('topbarup', $topbarup);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', 'robot');
$siteSetting->addChild('sitebots', $sitebots);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '时间格式');
$siteSetting->addChild('sitetity', $sitetity);

$xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/siteinfo.xml');
