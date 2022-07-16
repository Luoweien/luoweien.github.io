<?php
error_reporting(0);
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';

if (strlen($_POST["user"]) > 12 || strlen($_POST["pass"]) > 12 || strpos(preg_replace($blacklist, "⨯", $_POST["user"]), '⨯') !== false || strpos(preg_replace($blacklistemil, "⨯", $_POST["pass"]), '⨯') !== false ) {
    echo '<script>';
    echo "sessionStorage.setItem('windows','8');";
    //echo "top.location.href = '/';";
    echo '</script>';
    echo 'error';
    die;
}
$usname = $_POST['user'];
$uspass = $_POST['pass'];
$usErr = $passErr = $Err = "";
$us = $pass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user"])) {
        $usErr = $L['loginnull'];
    } else {
        if (($adminUser == $usname) && ($adminPass == $uspass)) {
            $_SESSION['loginma'] = $tokens;
            echo '<script>';
            echo "sessionStorage.setItem('windows','1');";
            echo "top.location.href = '/';";
            echo '</script>';
        } else {
            $usErr = $L['loginerror'];
        }
    }
    if (empty($_POST["pass"])) {
        $passErr = $L['loginnull'];
    } else {
        if (($yonghuming == $usname) && ($mima == $uspass)) {
            $_SESSION['loginma'] = $tokens;
            echo '<script>';
            echo "sessionStorage.setItem('windows','1');";
            echo "top.location.href = '/';";
            echo '</script>';
        } else {
            $usErr = $L['loginerror'];
        }
    }
}
?>
<link rel="stylesheet" href="/content/css/login.css?version=8.0">
<div class="background-image">
    <div class="login-info">
        <span class="indexname"><?php echo $L['login'] ?></span>
    </div>
    <img class="background-img" src="<?php echo $backgroundImage; ?>" onerror="this.src ='/content/icon/default.svg'">
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="login-form">
    <h3 style="color:#707070;font-weight: 100;text-align:center"><?php echo $L['loginpage'] ?></h3>
    <span style="color:red;font-size:10px;"><?php echo $usErr; ?></span>
    <input maxlength="12" type="text" require="require" name="user" placeholder="<?php echo $L['username'] ?>" class="login-form1"><br><br>
    <input maxlength="12" type="password" require="require" name="pass" placeholder="<?php echo $L['userpass'] ?>" class="login-form1"><br><br>
    <span style="font-size:12px;"><input type="checkbox" id="savepass"><label for="savepass"><?php echo $L['jizhumima'] ?></label></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><input type="checkbox" id="autologin"><label for="autologin"><?php echo $L['zidongdenglu'] ?></label></span><br><br>
    <input type="submit" class="login-form2" style="background: <?php echo $style_mainColor; ?>;" value="<?php echo $L['submit'] ?>">
</form>