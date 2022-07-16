<?php
@session_start();
error_reporting(0);
$GLOBALS['siteInfo_Version'] = "Alpha1.0Free";
if ($_SESSION['tokens'] == false) {
    $yuanshima = $_SESSION['tokens'] = 'Ke3jCHd4kl';
    $duibima = $_SESSION['loginma'] = 0;
} else {
    $yuanshima = $_SESSION['tokens'];
    $duibima = $_SESSION['loginma'];
}
$GLOBALS['tokens'] = $yuanshima;
$GLOBALS['loginma'] = $duibima;
function siteinfo()
{
    $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/content/sys/siteinfo.xml');
    $xml = new SimpleXMLElement($content);
    foreach ($xml->siteSetting as $siteSetting) {
        $sitekeys[] = $siteSetting->sitekeys;
        $sitedesc[] = $siteSetting->sitedesc;
        $sitename[] = $siteSetting->sitename;
        $sitesige[] = $siteSetting->sitesige;
        $postnum[] = $siteSetting->postnum;
        $topcolo[] = $siteSetting->topcolo;
        $topmosh[] = $siteSetting->topmosh;
        $maincol[] = $siteSetting->maincol;
        $backimg[] = $siteSetting->backimg;
        $backurl[] = $siteSetting->backurl;
        $userimg[] = $siteSetting->userimg;
        $userurl[] = $siteSetting->userurl;
        $usernic[] = $siteSetting->usernic;
        $siteaugr[] = $siteSetting->siteaugr;
        $qrcode[] = $siteSetting->qrcode;
        $qrcodurl[] = $siteSetting->qrcodurl;
        $siteimap[] = $siteSetting->siteimap;
        $siteemal[] = $siteSetting->siteemal;
        $topbarup[] = $siteSetting->topbarup;
        $sitebots[] = $siteSetting->sitebots;
        $sitetity[] = $siteSetting->sitetity;
    }
    $GLOBALS['sitekeys'] = $sitekeys[0];
    $GLOBALS['sitedesc'] = $sitedesc[1];
    $GLOBALS['sitename'] = $sitename[2];
    $GLOBALS['sitesige'] = $sitesige[3];
    $GLOBALS['postnum'] = $postnum[4];
    $GLOBALS['topcolo'] = $topcolo[5];
    $GLOBALS['topmosh'] = $topmosh[6];
    $GLOBALS['maincol'] = $maincol[7];
    $GLOBALS['backimg'] = $backimg[8];
    $GLOBALS['backurl'] = $backurl[9];
    $GLOBALS['userimg'] = $userimg[10];
    $GLOBALS['userurl'] = $userurl[11];
    $GLOBALS['usernic'] = $usernic[12];
    $GLOBALS['siteaugr'] = $siteaugr[13];
    $GLOBALS['qrcode'] = $qrcode[14];
    $GLOBALS['qrcodurl'] = $qrcodurl[15];
    $GLOBALS['siteimap'] = $siteimap[16];
    $GLOBALS['siteemal'] = $siteemal[17];
    $GLOBALS['topbarup'] = $topbarup[18];
    $GLOBALS['sitebots'] = $sitebots[19];
    $GLOBALS['sitetity'] = $sitetity[20];
}
siteinfo();
function changesabout()
{
    $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/content/sys/siteabout.xml');
    $xml = new SimpleXMLElement($content);
    foreach ($xml->aboutchange as $aboutchange) {
        $aboutnick[] = $aboutchange->aboutnick;
        $aboutgender[] = $aboutchange->aboutgender;
        $aboutage[] = $aboutchange->aboutage;
        $aboutvocation[] = $aboutchange->aboutvocation;
        $aboutsideline[] = $aboutchange->aboutsideline;
        $aboutcompany[] = $aboutchange->aboutcompany;
        $aboutcity[] = $aboutchange->aboutcity;
        $abouthometown[] = $aboutchange->abouthometown;
        $aboutemail[] = $aboutchange->aboutemail;
        $aboutaboutme[] = $aboutchange->aboutaboutme;
        $aboutsocials[] = $aboutchange->aboutsocials;
        $aboutplatform[] = $aboutchange->aboutplatform;
        $aboutcustom[] = $aboutchange->aboutcustom;
        $aboutcustom1[] = $aboutchange->aboutcustom1;
        $aboutcustom01[] = $aboutchange->aboutcustom01;
        $aboutcustom2[] = $aboutchange->aboutcustom2;
        $aboutcustom02[] = $aboutchange->aboutcustom02;
        $aboutcustom3[] = $aboutchange->aboutcustom3;
        $aboutcustom03[] = $aboutchange->aboutcustom03;
        $abouthobby[] = $aboutchange->abouthobby;
        $aboutskill[] = $aboutchange->aboutskill;
        $aboutexplain[] = $aboutchange->aboutexplain;
    }
    $GLOBALS['aboutNick'] = $aboutnick[0];
    $GLOBALS['aboutGender'] = $aboutgender[1];
    $GLOBALS['aboutAge'] = $aboutage[2];
    $GLOBALS['aboutVocation'] = $aboutvocation[3];
    $GLOBALS['aboutSideline'] = $aboutsideline[4];
    $GLOBALS['aboutCompany'] = $aboutcompany[5];
    $GLOBALS['aboutCity'] = $aboutcity[6];
    $GLOBALS['aboutHometown'] = $abouthometown[7];
    $GLOBALS['aboutEmail'] = $aboutemail[8];
    $GLOBALS['aboutAboutme'] = $aboutaboutme[9];
    $GLOBALS['aboutSocials'] = $aboutsocials[10];
    $GLOBALS['aboutPlatform'] = $aboutplatform[11];
    $GLOBALS['aboutCustom'] = $aboutcustom[12];
    $GLOBALS['aboutCustom1'] = $aboutcustom1[13];
    $GLOBALS['aboutCustom01'] = $aboutcustom01[14];
    $GLOBALS['aboutCustom2'] = $aboutcustom2[15];
    $GLOBALS['aboutCustom02'] = $aboutcustom02[16];
    $GLOBALS['aboutCustom3'] = $aboutcustom3[17];
    $GLOBALS['aboutCustom03'] = $aboutcustom03[18];
    $GLOBALS['aboutHobby'] = $abouthobby[19];
    $GLOBALS['aboutSkill'] = $aboutskill[20];
    $GLOBALS['aboutExplain'] = $aboutexplain[21];
}
changesabout();
$conf = $_SERVER['DOCUMENT_ROOT'] . '/content/sys/conn.xml';
if (file_exists($conf)) {
    function siteconfig()
    {
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/content/sys/conn.xml');
        $xml = new SimpleXMLElement($content);
        foreach ($xml->config as $config) {
            $localurl[] = $config->localhost;
            $localuse[] = $config->user;
            $localpass[] = $config->password;
            $localdbna[] = $config->dbname;
            $localusername[] = $config->username;
            $localuserpass[] = $config->userpass;
            $localusertizo[] = $config->usertizo;
            $localuserlang[] = $config->userlang;
        }
        $GLOBALS['localUrl'] = $localurl[0];
        $GLOBALS['localUse'] = $localuse[1];
        $GLOBALS['localPass'] = $localpass[2];
        $GLOBALS['localdbname'] = $localdbna[3];
        $GLOBALS['localUsername'] = $localusername[4];
        $GLOBALS['localUserpass'] = $localuserpass[5];
        $GLOBALS['localUsertizo'] = $localusertizo[6];
        $GLOBALS['localUserlang'] = $localuserlang[7];
    }
    siteconfig();
} else {
    $GLOBALS['localUrl'] = null;
    $GLOBALS['localUse'] = null;
    $GLOBALS['localPass'] = null;
    $GLOBALS['localdbname'] = null;
    $GLOBALS['localUsername'] = null;
    $GLOBALS['localUserpass'] = null;
    $GLOBALS['localUsertizo'] = null;
    $GLOBALS['localUserlang'] = null;
}
$GLOBALS['siteInfo_Keywords'] = $sitekeys;
$GLOBALS['siteInfo_Description'] = $sitedesc;
$GLOBALS['siteInfo_city'] = $siteimap;
$GLOBALS['siteInfo_mail'] = $siteemal;
$GLOBALS['siteInfo_Postnumber'] = $postnum;
$GLOBALS['siteName_Name'] = $sitename;
$GLOBALS['siteName_Split'] = $sitesige;
$GLOBALS['nickName'] = $usernic;
$GLOBALS['siteOnes'] = $siteaugr;
$GLOBALS['qrCodeUp'] = $qrcode;
$GLOBALS['qrCodeUrl'] = $qrcodurl;
$GLOBALS['avatarImageUp'] = $userimg;
$GLOBALS['avatarImageUrl'] = $userurl;
$GLOBALS['backgroundImageUp'] = $backimg;
$GLOBALS['backgroundImageUrl'] = $backurl;
$GLOBALS['setting_Timetype'] = $sitetity;

$GLOBALS['about_nickname'] = $aboutNick;
$GLOBALS['about_gender'] = $aboutGender;
$GLOBALS['about_age'] = $aboutAge;
$GLOBALS['about_vocation'] = $aboutVocation;
$GLOBALS['about_sideline'] = $aboutSideline;
$GLOBALS['about_company'] = $aboutCompany;
$GLOBALS['about_city'] = $aboutCity;
$GLOBALS['about_hometown'] = $aboutHometown;
$GLOBALS['about_email'] = $aboutEmail;
$GLOBALS['about_aboutme'] = $aboutAboutme;
$GLOBALS['about_social'] = $aboutSocials;
$GLOBALS['about_platform'] = $aboutPlatform;
$GLOBALS['about_custom'] = $aboutCustom;
$GLOBALS['about_custom1'] = $aboutCustom1;
$GLOBALS['about_custom2'] = $aboutCustom2;
$GLOBALS['about_custom3'] = $aboutCustom3;
$GLOBALS['about_custom01'] = $aboutCustom01;
$GLOBALS['about_custom02'] = $aboutCustom02;
$GLOBALS['about_custom03'] = $aboutCustom03;
$GLOBALS['about_hobby'] = $aboutHobby;
$GLOBALS['about_skill'] = $aboutSkill;
$GLOBALS['about_explain'] = $aboutExplain;
$GLOBALS['style_topbarColor'] = $topcolo;
$GLOBALS['style_topbarMos'] = $topmosh;
$GLOBALS['style_topbarTop'] = $topbarup;
$GLOBALS['style_mainColor'] = $maincol;
$GLOBALS['setting_robot'] = $sitebots;
$GLOBALS['install_localurl'] = $localUrl;
$GLOBALS['install_localuse'] = $localUse;
$GLOBALS['install_localpass'] = $localPass;
$GLOBALS['install_localdbname'] = $localdbname;
$GLOBALS['adminUser'] = $localUsername;
$GLOBALS['adminPass'] = $localUserpass;
$GLOBALS['siteInfo_Timezone'] = $localUsertizo;
$GLOBALS['siteInfo_Languages'] = $localUserlang;
if ($avatarImageUp == '') {
    $avatarImage = $avatarImageUrl;
} else {
    $avatarImage = $avatarImageUp;
}
if ($backgroundImageUp == '') {
    $backgroundImage = $backgroundImageUrl;
} else {
    $backgroundImage = $backgroundImageUp;
}
if ($qrCodeUp == '') {
    $qrCode = $qrCodeUrl;
} else {
    $qrCode = $qrCodeUp;
}
ini_set('date.timezone', $siteInfo_Timezone);
$file_exists = file_exists($_SERVER['DOCUMENT_ROOT'] . "/letontop_languages/" . $siteInfo_Languages . ".json");
if ($file_exists) {
    $myfanyi = fopen($_SERVER['DOCUMENT_ROOT'] . "/letontop_languages/" . $siteInfo_Languages . ".json", "r") or die("");
    $myfanyicontent = fread($myfanyi, filesize($_SERVER['DOCUMENT_ROOT'] . "/letontop_languages/" . $siteInfo_Languages . ".json"));
    $GLOBALS['L'] = (array)json_decode($myfanyicontent, true);
} else {
    $myfanyi = fopen($_SERVER['DOCUMENT_ROOT'] . "/letontop_languages/default.json", "r") or die("");
    $myfanyicontent = fread($myfanyi, filesize($_SERVER['DOCUMENT_ROOT'] . "/letontop_languages/default.json"));
    $GLOBALS['L'] = (array)json_decode($myfanyicontent, true);
}
$siteurl = $_SERVER['REQUEST_URI'] . "";
if ($siteurl == '/') {
    $siteurl = $L['home'];
} elseif ($siteurl == '/le_kernel/le_settings.php') {
    $siteurl = $L['siteSet_sett'];
} elseif ($siteurl == '/message.php') {
    $siteurl = $L['message'];
} elseif ($siteurl == '/picture.php') {
    $siteurl = $L['picture'];
} elseif ($siteurl == '/about.php') {
    $siteurl = $L['about'];
} elseif ($siteurl == '/login.php') {
    $siteurl = $L['loginpage'];
}
$GLOBALS['siteName_Title'] = $siteurl;
$blacklist = "/<|>|\/|\\\|=|\(|\)|\[|\]|{|}|\?|\,|\.|\!|\@|\#|\\$|\&|\*|\_|\-|\+|\'|\`|{|}|\r|\n| |\"|\;|\:|%|\|/";
$blacklistemil = "/<|>|\/|\\\|=|\(|\)|\[|\]|{|}|\?|\,|\!|\#|\\$|\&|\*|\_|\-|\+|\'|\`|{|}|\r|\n| |\"|\;|\:|%|\|/";
