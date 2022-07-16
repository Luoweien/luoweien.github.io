<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/content/css/install.css?version=0.32">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>LETON</title>
</head>
<body>
    <?php
    @session_start();
    require_once($_SERVER['DOCUMENT_ROOT'] . "/le_kernel/le_visit.php");
    $_SESSION['install']=1;
    ?>
    <div class="select">
        <h7 class="h7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alpha 1.0</h7>
        <h5>LETON</h5>
        <span>install</span><br>
        <h6>www.leton.top</h6>
        <ul>
            <a href="/install/install-zh_CN.php"><li>中文</li></a>
            <a href="/install/install-en.php"><li>English</li></a>
            <a href="/install/install-ja.php"><li>日本語</li></a>
            <a href="/install/install-ko.php"><li>한글</li></a>
        </ul>
    </div>