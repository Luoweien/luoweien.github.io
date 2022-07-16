<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};
header('Content-Type: text/html; charset=UTF-8');
if (!is_Dir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/")) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/", 0755, true);
}
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
    if ($_POST['pic000'] == 'default') {
        if ($_POST['pic0000'] == '') {
            $newdir = '';
        } else {
            $newdir = $_POST['pic0000'];
        }
        if ($_POST['pic00000'] == '/content/icon/null.svg') {
            $newurl = '';
        } else {
            $newurl = $_POST['pic00000'];
        }
    }
    if ($_POST['pic000'] == 'delete') {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $_POST['pic0000'] . '/';
        deldir($path);
        $newdir = '';
        $newurl = '';
    }
    if ($_POST['pic000'] == 'addto') {
        $shangchuan = $_FILES['pic'];
        if (!empty($shangchuan['name'])) {
            if ($shangchuan['type'] == 'Content-type:image/jpg' or $shangchuan['type'] == 'Content-type:image/png' or $shangchuan['type'] == 'Content-type:image/webp' or $shangchuan['type'] == 'Content-type:image/jfif') {
                echo '失败--类型不符';
                die();
            }
            $suijishuzi = mt_rand(1, 999999999);
            if (empty($shangchuan['name'])) {
            } else {
                mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/" . $suijishuzi, 0755);
                copy($shangchuan['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $suijishuzi . '/' . $shangchuan['name']);
                $newurl = '/content/uploads/' . $suijishuzi . '/' . $shangchuan['name'];
                $newdir = $suijishuzi;
            }
        }
    }

    if ($_POST['pic000'] == 'replace') {
        $path = $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $_POST['pic0000'] . '/';
        deldir($path);

        $shangchuan = $_FILES['pic'];
        if (!empty($shangchuan['name'])) {
            if ($shangchuan['type'] == 'Content-type:image/jpg' or $shangchuan['type'] == 'Content-type:image/png' or $shangchuan['type'] == 'Content-type:image/webp' or $shangchuan['type'] == 'Content-type:image/jfif') {
                echo '失败--类型不符';
                die();
            }
            $suijishuzi = mt_rand(1, 999999999);
            if (empty($shangchuan['name'])) {
            } else {
                mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/" . $suijishuzi, 0755);
                copy($shangchuan['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $suijishuzi . '/' . $shangchuan['name']);
                $newurl = '/content/uploads/' . $suijishuzi . '/' . $shangchuan['name'];
                $newdir = $suijishuzi;
            }
        }
    }

$postid = $_POST['editpostid'];
$addData = $_POST['selectdate'];
$addContent = str_replace("\r","<br>", $_POST['content'],$i);
$addImagesDir = $newdir;
$addImagesUrl = $newurl;
$addView = $_POST['selectview'];
$addMap = $_POST['selectmp'];
$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接: ' . mysqli_connect_error());
};
$sql = "UPDATE loglist SET adddate = '$addData', content = '$addContent', imgid = '$addImagesDir', imgiu = '$addImagesUrl',  map = '$addMap', view = '$addView'  WHERE id = '$postid'";
if ($conn->query($sql) === TRUE) {
    echo '<script>';
    echo "sessionStorage.setItem('windows','7');";
    echo "top.location.href = '/';";
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
