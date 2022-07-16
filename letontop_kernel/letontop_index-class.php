<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
if ($tokens === $loginma) {
    $display = "";
} else {
    $display = "Where viewl='display'";
};
$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接:' . mysqli_connect_error());
}
if(is_numeric($_POST['post'])){
    $post_page = $_POST['post'];
    $offset_post = ($post_page - 1) * $siteInfo_Postnumber;
    $sqlnew = "SELECT * FROM loglist $display order by id DESC limit $offset_post , $siteInfo_Postnumber";
    $result = $conn->query($sqlnew);
    foreach ($result as $number => $row) {
        $maxid[] = $row["id"];
    }
    echo '{"list":';
    echo '[';
    $x = 0;
    foreach ($result as $number => $row) {
        if ($row['id'] == $maxid[0]) {
        } else {
            echo ',';
        }
        $i = 0;
        if ($i < $row['id']) {
            $postid[] = $row["id"];
            $postadddata[] = $row["adddate"];
            $postcontent[] = $row["content"];
            $postimgdl[] = $row["imgid"];
            $postimgul[] = $row["imgiu"];
            $posmap[] = $row["map"];
            $postilike[] = $row["ilike"];
            $postview[] = $row["view"];
            echo json_encode(array(
                'postid' => $postid[$x],
                'data' => $postadddata[$x],
                'content' => $postcontent[$x],
                'imgdir' => $postimgdl[$x],
                'imgurl' => $postimgul[$x],
                'map' => $posmap[$x],
                'ilike' => $postilike[$x],
                'view' => $postview[$x]
            ));
        }
        $x++;
    }
    echo ']}';
    mysqli_close($conn);
}
