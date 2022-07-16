<?php
@session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
$_SESSION['liuyan'] = $_SESSION['liuyan'] + 1;
if (empty($_GET['id'])) {
    if($_SESSION['liuyan'] <= 4){
        if ($_POST['message'] == '') {
        } else {
            $pnikename = $_POST['nickname'];
            $pemail = $_POST['info'];
            $pcontent = $_POST['message'];
            if (strpos(preg_replace($blacklist, "⨯", $pnikename), '⨯') !== false || strpos(preg_replace($blacklistemil, "⨯", $pemail), '⨯') !== false || strpos(preg_replace($blacklist, "⨯", $pcontent), '⨯') !== false  || strlen($pnikename) > 27  || strlen($pemail) > 24  || strlen($pcontent) > 240) {
                echo '<script>';
                echo "sessionStorage.setItem('windows','8');";
                echo "top.location.href = '/message.php';";
                echo '</script>';
            } else {
                if (empty($_POST['nickname'])) {
                    $mingc = $L['niming'];
                } else {
                    $mingc = $_POST['nickname'];
                }
                if (empty($_POST['info'])) {
                    $youx = $L['null'];
                } else {
                    $youx = $pemail;
                }
                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml')) {
                    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><thread/>');
                    $xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml');
                }
                $guestbook = new DomDocument();
                $guestbook->load($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml');
                $threads = $guestbook->documentElement;
                $thread = $guestbook->createElement('thread');
                $threads->appendChild($thread);
                $title = $guestbook->createElement('nickname');
                $title->appendChild($guestbook->createTextNode($mingc));
                $thread->appendChild($title);
                $author = $guestbook->createElement('info');
                $author->appendChild($guestbook->createTextNode($youx));
                $thread->appendChild($author);
                $content = $guestbook->createElement('message');
                $content->appendChild($guestbook->createTextNode($_POST['message']));
                $thread->appendChild($content);
                $date = $guestbook->createElement('date');
                $date->appendChild($guestbook->createTextNode(date($setting_Timetype)));
                $thread->appendChild($date);
                $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml', "w");
                if (fwrite($fp, $guestbook->saveXML())) {
                    error_reporting(0);
                    $to = $siteemal;
                    $subject = "「" . $sitename . "」".$L['emailmessagesubject'];
                    $message = "
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <meta charset='UTF-8'>
                            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                            <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
                            <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'>
                            <title>[ " . $sitename . " ] ".$L['emailmessageheaders']."</title>
                        </head>
                        <body style='margin:0 auto;background:#fbfbfb'>
                            <div style='background-color:#03a9f4c2;color:white;width:100%;height:40px;line-height:40px;'><div style='width:98%;max-width:600px;height:auto;margin:0 auto;'>"."[ " . $sitename . " ] ".$L['emailmessageheaders']."</div></div>
                                <div style='width:98%;max-width:600px;height:auto;margin:0 auto;background-color:white;box-shadow:0px 0px 5px #ccc;padding:10px;padding-top:30px;box-sizing:border-box'>
                                <span style='font-weight:bold;color:#2196f3;font-size:16px'>".$L['emailmessagetite'].$mingc."</span><br>
                                <span style='color:#686868c2;font-size:12px'>".$L['emailmessagecontent1'].$youx."</span><br><hr style='border: 0;border-bottom: 1px solid #f0f0f0;'>
                                <span style='font-weight:bold;color:#e1e1e1;font-size:16px'>".$L['emailmessagecontent2']."</span><span style='font-weight:bold;color:#585858c2;font-size:16px'><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_POST['message']."</span><br><br><hr style='border: 0;border-bottom: 1px solid #f0f0f0;'>
                                <span style='font-weight:bold;color:#03a9f4c2;font-size:12px;float:right'>\n[ ".$L['emailmessagecontent3'] . $sitename . " ]</span><br>
                                <span style='color:#484848c2;font-size:12px;float:right'>".date('Y/m/d h:i:s')."</span><br>
                            </div>
                        </body>
                    ";
                    $from = "「" . $sitename . "」".$L['emailmessageheaders'];
                    $htmltype = "Content-Type:text/html";
                    $headers = $htmltype."\r\nFrom:".$from;
                    mail($to, $subject, $message,$headers);
                    echo '<script>';
                    echo "sessionStorage.setItem('windows','4');";
                    echo "top.location.href = '/message.php';";
                    echo '</script>';
                } else {
                        echo "submit-error";
                }
                fclose($fp);
            }
            die;
        }
    }else{
        echo '<script>';
        echo "sessionStorage.setItem('windows','10');";
        echo "top.location.href = '/message.php';";
        echo '</script>';
    }
} else {
    if($_GET['id'] == 'de1'){
        if ($tokens !== $loginma) {
            echo '<br><br><p style="margin-top:200px;text-align:center">404 Not Found !</p>';
            die;
        }
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><thread/>');
        $xml->asXML($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml');
        echo '<script>';
        echo "sessionStorage.setItem('windows','5');";
        echo "top.location.href = '/message.php';";
        echo '</script>';
        die;
    }
}
