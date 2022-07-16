<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/le_kernel/le_visit.php");
include $_SERVER['DOCUMENT_ROOT'].'/le_kernel/le_functions.php';

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><configs/>');
$config = $xml->addChild('config');
$config->addAttribute('type', '服务器地址');
$config->addChild('localhost', $_POST['local']);
$config = $xml->addChild('config');
$config->addAttribute('type', '用户名');
$config->addChild('user', languages($_POST['user'], $a, $a_db_user));
$config = $xml->addChild('config');
$config->addAttribute('type', '密码');
$config->addChild('password', languages($_POST['pass'], $a, $a_db_pass));
$config = $xml->addChild('config');
$config->addAttribute('type', '数据库名称');
$config->addChild('dbname', languages($_POST['dbna'], $a, $a_db_name));
$config = $xml->addChild('config');
$config->addAttribute('type', '登录名称');
$config->addChild('username', languages($_POST['us-nam'], $a, $a_admin_user));
$config = $xml->addChild('config');
$config->addAttribute('type', '登录密码');
$config->addChild('userpass', languages($_POST['us-pas'], $a, $a_admin_pass));
$config = $xml->addChild('config');
$config->addAttribute('type', '时区');
$config->addChild('usertizo', $_POST['us-zon']);
$config = $xml->addChild('config');
$config->addAttribute('type', '语言');
$config->addChild('userlang', $_POST['us-lan']);
$xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/$#@!conn.xml');



$conn = mysqli_connect($_POST['local'], $_POST['user'], $_POST['pass'], $_POST['dbna']);


if (!$conn) {
    unlink($_SERVER['DOCUMENT_ROOT'] . '/content/sys/$#@!conn.xml');
    die('<div style="width:100px;height:100px;border-radius:100px;background-color:red;text-align:center;line-height:100px;color:white;font-size:80px;margin:0 auto;margin-top:130px">✖</div><div style="text-align:center;"><h1>'.$L["installError"].'<br>'.$L["linkDBerror"].'</h1><span style="color:red;">'.$L["tableError"].'</span><span style="color:grey"><?php echo $L["installError01"]?></span></div>' . mysqli_connect_error());
}
$sql = "CREATE TABLE article (
        id INT(10) AUTO_INCREMENT PRIMARY KEY, 
        adddatel VARCHAR(255) NOT NULL ,
        contentl LONGTEXT NOT NULL ,
        imgidl TEXT NOT NULL ,
        imgiul TEXT NOT NULL ,
        mapl VARCHAR(255) NOT NULL ,
        ilikel INT(10) NOT NULL ,
        viewl VARCHAR(255) NOT NULL 
        ) ENGINE = InnoDB";
if ($conn->query($sql) === TRUE) {
    echo '<div style="width:100px;height:100px;border-radius:100px;background-color:#03a9f4;text-align:center;line-height:100px;color:white;font-size:80px;margin:0 auto;margin-top:130px">✔</div><div style="text-align:center;"><h1>'.$L["yourname"] . $_POST['us-nam'] . '<br>'.$L['userpass'] . $_POST['us-pas'] . '<br>'.$L['linkOK01'].'</h1><span style="color:#03a9f4;">'.$L['linkOK02'].'</span><span style="color:grey"></span><br><br><a href="/le_kernel/deleteinstall.php?a=delete"" style="color:#03a9f4;font-weight:bold">'.$L['linkOK04'].'</a></div>';
} else {
    echo '<div style="width:100px;height:100px;border-radius:100px;background-color:#03a9f4;text-align:center;line-height:100px;color:white;font-size:80px;margin:0 auto;margin-top:130px">✔</div><div style="text-align:center;"><h1>'.$L["yourname"] . $_POST['us-nam'] . '<br>'.$L['userpass'] . $_POST['us-pas'] . '<br>'.$L['linkOK01'].'</h1><span style="color:#03a9f4;">'.$L['linkOK02'].'</span><span style="color:grey"></span><br><br><a href="/le_kernel/deleteinstall.php?a=delete" style="color:#03a9f4;font-weight:bold">'.$L['linkOK04'].'</a></div>';
};
mysqli_close($conn);

@session_start();
if($_SESSION['install'] == 1){
    $_SESSION['install']=0;
    echo '<script>';
    echo 'location.reload()';
    echo '</script>';
}