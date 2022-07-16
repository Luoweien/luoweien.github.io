<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};


$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接: ' . mysqli_connect_error());
};

    if (!empty($_FILES['pic']['name'])) {
        header('Content-Type: text/html; charset=UTF-8');
        $shangchuan = $_FILES['pic'];
        if ($shangchuan['type'] == 'Content-type:image/jpg' or $shangchuan['type'] == 'Content-type:image/png' or $shangchuan['type'] == 'Content-type:image/webp' or $shangchuan['type'] == 'Content-type:image/jfif') {
            echo '失败--类型不符';
            die();
        } else {
        }
        $suijishuzi = mt_rand(1, 999999999);
        if ($_FILES['pic'] == '') {
        } else {
            if (!is_Dir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/")) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/", 0755, true);
            } else {
            }
            mkdir($_SERVER['DOCUMENT_ROOT'] . "/content/uploads/" . $suijishuzi, 0755);
        }
        if (empty($shangchuan['name'])) {
        } else {
            copy($_FILES['pic']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $suijishuzi . '/' . $_FILES['pic']['name']);
        }
        if (empty($shangchuan['name'])) {
            $imageUrl = '';
        } else {
            $imagesurl = '/content/uploads/' . $suijishuzi . '/' . $_FILES['pic']['name'];
        }
    }

$addData = $_POST['selectdate'];
$addContent = str_replace("\r","<br>", $_POST['content'],$i);
$addImagesDir = $suijishuzi;
$addImagesUrl = $imagesurl;
$addMap = $_POST['selectmp'];
$addView = $_POST['selectview'];
$addIlike = '0';

if($addContent == '' && $addImagesUrl == ''){
    echo '<script>';
    echo "top.location.href = '/';";
    echo '</script>';
}else{
    $sql = "INSERT INTO loglist (adddate, content, imgid, imgiu, map, ilike, view) VALUES ('$addData', '$addContent', '$addImagesDir', '$addImagesUrl', '$addMap', '$addIlike', '$addView')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>';
        echo "sessionStorage.setItem('windows','7');";
        echo "top.location.href = '/';";
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}
