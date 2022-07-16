<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens !== $loginma) {
  header("location: /");
  die;
};
if (!is_Dir($_SERVER['DOCUMENT_ROOT'] . "/content/sys/")) {
  mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/sys/", 0755, true);
}
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><configs/>');
$config = $xml->addChild('config');
$config->addAttribute('type', '服务器地址');
$config->addChild('localhost', $install_localurl);
$config = $xml->addChild('config');
$config->addAttribute('type', '用户名');
$config->addChild('user', $install_localuse);
$config = $xml->addChild('config');
$config->addAttribute('type', '密码');
$config->addChild('password', $install_localpass);
$config = $xml->addChild('config');
$config->addAttribute('type', '数据库名称');
$config->addChild('dbname', $install_localdbname);
$config = $xml->addChild('config');
$config->addAttribute('type', '登录名称');
$config->addChild('username', $_POST['us-nam']);
$config = $xml->addChild('config');
$config->addAttribute('type', '登录密码');
$config->addChild('userpass', $_POST['us-pas']);
$config = $xml->addChild('config');
$config->addAttribute('type', '时区');
$config->addChild('usertizo', $_POST['us-tiz']);
$config = $xml->addChild('config');
$config->addAttribute('type', '语言');
$config->addChild('userlang', $_POST['us-lan']);
$xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/conn.xml');
if (empty($_FILES['up-ico']['name'])) {
} else {
  header("Content-Type: text/html; charset=UTF-8");
  $shangchuanicon = $_FILES['up-ico'];
  if ($shangchuanicon['type'] == "Content-type:image/jpg" or $shangchuanicon['type'] == "Content-type:image/png" or $shangchuanicon['type'] == "Content-type:image/webp" or $shangchuanicon['type'] == "Content-type:image/jfif" or $shangchuanicon['type'] == "Content-type: image/gif") {
    echo '失败--类型不符';
    die();
  }
  if ($shangchuanicon['size'] > 3000000) {
    echo '失败--大小不符';
    die();
  }
  copy($shangchuanicon['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/favicon.ico');
}
if (empty($_FILES['bg-img']['name'])) {
  $backgimage = $backimg;
} else {
  header("Content-Type: text/html; charset=UTF-8");
  $shangchuanback = $_FILES['bg-img'];
  if ($shangchuanback['type'] == "Content-type:image/jpg" or $shangchuanback['type'] == "Content-type:image/png" or $shangchuanback['type'] == "Content-type:image/webp" or $shangchuanback['type'] == "Content-type:image/jfif" or $shangchuanback['type'] == "Content-type: image/gif") {
    echo '失败--类型不符';
    die();
  }
  if ($shangchuanback['size'] > 3000000) {
    echo '失败--大小不符';
    die();
  }
  copy($shangchuanback['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/sys/background-up.jpg');
  $backgimage = '/content/sys/background-up.jpg';
}
if (empty($_FILES['av-img']['name'])) {
  $avatarimg = $userimg;
} else {
  header("Content-Type: text/html; charset=UTF-8");
  $shangchuanavatar = $_FILES['av-img'];
  if ($shangchuanavatar['type'] == "Content-type:image/jpg" or $shangchuanavatar['type'] == "Content-type:image/png" or $shangchuanavatar['type'] == "Content-type:image/webp" or $shangchuanavatar['type'] == "Content-type:image/jfif" or $shangchuanavatar['type'] == "Content-type: image/gif") {
    echo '失败--类型不符';
    die();
  }
  if ($shangchuanavatar['size'] > 3000000) {
    echo '失败--大小不符';
    die();
  }
  copy($shangchuanavatar['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/sys/useravatar-up.jpg');
  $avatarimg = '/content/sys/useravatar-up.jpg';
}
if (empty($_FILES['qr-img']['name'])) {
  $qrcodeimg = $qrcode;
} else {
  header("Content-Type: text/html; charset=UTF-8");
  $shangchuanqrcode = $_FILES['qr-img'];
  if ($shangchuanqrcode['type'] == "Content-type:image/jpg" or $shangchuanqrcode['type'] == "Content-type:image/png" or $shangchuanqrcode['type'] == "Content-type:image/webp" or $shangchuanqrcode['type'] == "Content-type:image/jfif" or $shangchuanqrcode['type'] == "Content-type: image/gif") {
    echo '失败--类型不符';
    die();
  }
  if ($shangchuanqrcode['size'] > 3000000) {
    echo '失败--大小不符';
    die();
  }
  copy($shangchuanqrcode['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/sys/qrcode.png');
  $qrcodeimg = '/content/sys/qrcode.png';
}
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><siteSettings/>');
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站关键词');
$siteSetting->addChild('sitekeys', $_POST['us-key']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站描述');
$siteSetting->addChild('sitedesc', $_POST['us-des']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站名称');
$siteSetting->addChild('sitename', $_POST['us-sit']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '分隔号');
$siteSetting->addChild('sitesige', $_POST['us-sig']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '文章数量');
$siteSetting->addChild('postnum', $_POST['us-pon']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '顶栏颜色');
$siteSetting->addChild('topcolo', $_POST['to-col']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '毛玻璃');
$siteSetting->addChild('topmosh', $_POST['to-mos']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '主颜色');
$siteSetting->addChild('maincol', $_POST['ma-col']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '背景图片');
$siteSetting->addChild('backimg', $backgimage);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '背景链接');
$siteSetting->addChild('backurl', $_POST['bg-url']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '个人头像');
$siteSetting->addChild('userimg', $avatarimg);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '头像链接');
$siteSetting->addChild('userurl', $_POST['av-url']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '昵称');
$siteSetting->addChild('usernic', $_POST['us-nic']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '网站签名');
$siteSetting->addChild('siteaugr', $_POST['us-aug']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '二维码');
$siteSetting->addChild('qrcode', $qrcodeimg);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '二维码地址');
$siteSetting->addChild('qrcodurl', $_POST['qr-url']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '当前定位');
$siteSetting->addChild('siteimap', $_POST['us-map']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '邮箱');
$siteSetting->addChild('siteemal', $_POST['us-mal']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '顶栏置顶');
$siteSetting->addChild('topbarup', $_POST['to-up']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', 'robot');
$siteSetting->addChild('sitebots', $_POST['si-bot']);
$siteSetting = $xml->addChild('siteSetting');
$siteSetting->addAttribute('type', '时间格式');
$siteSetting->addChild('sitetity', $_POST['si-tit']);
$xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/siteinfo.xml');
$file1 = "/data/sys/siteinfo.xml";
$file2 = "/data/sys/conn.xml";
if (file_exists($file1) && file_exists($file2)) {
  echo '设置保存出错!';
} else {
  echo '<script>';
  echo "sessionStorage.setItem('windows','2');";
  echo "top.location.href = '/letontop_kernel/letontop_settings.php';";
  echo '</script>';
}
