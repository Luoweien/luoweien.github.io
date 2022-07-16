<!DOCTYPE html>
<html lang="<?php echo $siteInfo_Languages ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="keywords" content="<?php echo $siteInfo_Keywords ?>">
    <meta name="description" content="<?php echo $siteInfo_Description ?>">
    <title><?php echo $siteName_Name . $siteName_Split . $siteName_Title ?></title>
    <link rel="stylesheet" href="/content/css/main.css?version=8.0">
    <link rel="stylesheet" href="/content/css/animation.css?version=8.0">
</head>
<body>
    
    <div id="lightbox" style="display: none;">
        <div id="lightbox-shell">
            <div id="lightbox-cancel" class="lightbox-cancel noselect" onclick="cancelimg()">
                <img src="/content/icon/add.svg" alt="" />
                <p><?php echo $L['lightbox']; ?></p>
            </div>
            <div id="lightbox-img" class="lightbox-img" onclick="hiddentool()">
            </div>
            <div id="lightbox-tool" class="lightbox-tool  noselect">
                <p class="lightbox-tool-p" onclick="fangda()"><img class="lightbox-tool-img" src="/content/icon/zoom-in.svg" /><?php echo $L['zoomin']; ?></p>
                <p class="lightbox-tool-p" onclick="suoxiao()"><img class="lightbox-tool-img" src="/content/icon/zoom-out.svg" /><?php echo $L['zoomout']; ?></p>
                <p class="lightbox-tool-p" onclick="quanping()"><img class="lightbox-tool-img" src="/content/icon/maximise.svg" /><?php echo $L['maximise']; ?></p>
                <p class="lightbox-tool-p" onclick="xuanzhuan()"><img class="lightbox-tool-img" src="/content/icon/refresh.svg" /><?php echo $L['refresh']; ?></p>
                <p class="lightbox-tool-p" onclick="fanzhuan()"><img class="lightbox-tool-img" src="/content/icon/swap-horizontal.svg" /><?php echo $L['horizontal']; ?></p>
            </div>
        </div>
    </div>
    <div class="totop" id="top-button" onclick="backtop()"><img src="/content/icon/arrow-up.svg" alt=""></div>
    <div id="window"></div>
    <div id="picshell"></div>
    <div id="login">
        <img src="" onerror="this.src ='/content/icon/default.svg'"><!-- <img src="<?php echo $backgroundImage; ?>" onerror="this.src ='/content/icon/default.svg'"> -->
        <p><?php echo $L['login']; ?></p>
        <form class="login-form">
            <span style="color:red;font-size:10px;" id="login-pand"></span>
            <input maxlength="12" type="text" require="require" id="adminuser" placeholder="<?php echo $L['username'] ?>" class="login-form1"><br><br>
            <input maxlength="12" type="password" require="require" id="adminpass" placeholder="<?php echo $L['userpass'] ?>" class="login-form1"><br><br>
            <span style="font-size:12px;"><input type="checkbox" id="savepass"><label for="savepass"><?php echo $L['jizhumima'] ?></label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><input type="checkbox" id="autologin"><label for="autologin"><?php echo $L['zidongdenglu'] ?></label></span><br><br>
            <input type="button" id="loging" class="login-form2" style="background: <?php echo $style_mainColor; ?>;" onclick="login_in()" value="<?php echo $L['submit'] ?>">
        </form>
    </div>
    <div id="mos_zhezhao" onclick="cancelmos()"></div>
    <div id="top-bar" class="top-bar" style="background: <?php echo $style_topbarColor; ?>;backdrop-filter: blur(<?php echo $style_topbarMos; ?>px);-webkit-backdrop-filter: blur(<?php echo $style_topbarMos; ?>px);position: <?php echo $style_topbarTop; ?>;">
        <div class="top-tool" id="totop">
            <?php
            if ($tokens === $loginma) {
                echo '<a href="/letontop_kernel/letontop_logout.php"><img src="/content/icon/power.svg" alt="power" id="out"></a>';
                $url = $_SERVER['REQUEST_URI'] . "";
                if ($url == '/letontop_kernel/letontop_settings.php') {
                } else {
                    echo '<img src="/content/icon/settings.svg" alt="settings" onclick="top.location.href = \'/letontop_kernel/letontop_settings.php\'">';
                }
            } else {
                $url = $_SERVER['REQUEST_URI'] . "";
                if ($url == '/letontop_kernel/letontop_settings.php' || $url == '/login.php') {
                } else {
                    echo "<img src='/content/icon/user.svg' alt='user' onclick='login()'>";
                }
            }
            ?></div>
        <div class="top-nav">
            <?php
            $url = $_SERVER['REQUEST_URI'] . "";
            if ($url !== '/') {
                echo "<a href='javascript:history.back(-1)'><img src='/content/icon/turn-left.svg' alt='back'></a>";
            }
            ?></div>
    </div>