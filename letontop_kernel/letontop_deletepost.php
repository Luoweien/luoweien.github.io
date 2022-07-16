<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};
if(is_numeric($_POST['deletepostid']) && is_numeric($_POST['deleteimgdir']) || $_POST['deleteimgdir'] == '' || strpos($_POST['deleteimgdir'], "\r") && strlen($_POST['deleteimgdir']) < 100){
    $conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
    $deletepostid = $_POST['deletepostid'];
    $deleteimgdir = $_POST['deleteimgdir'];
    if ($deleteimgdir == '') {
        $deleteimgdir = 'noname';
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

    
    $imagesdirs = explode("
", $deleteimgdir);


    var_dump($imagesdirs);
    echo count($imagesdirs);


    if ($imagesdirs[0] == 'noname') {
    } else {
        for ($i = 0; $i < count($imagesdirs); $i++) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/content/uploads/' . $imagesdirs[$i] . '/';
            deldir($path);
        }
    }
    $delete = mysqli_query($conn, "DELETE FROM loglist WHERE  id='$deletepostid'");
    if ($delete) {
    } else {
        echo 'deleteError';
    }
    mysqli_close($conn);
    echo '<script>';
    echo "sessionStorage.setItem('windows','6');";
    echo "top.location.href = 'javascript:history.back(-1)';";
    echo '</script>';  
}