<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接: ' . mysqli_connect_error());
}
if(strlen($_GET['ilikeid']) <= 3 && is_numeric($_GET['ilikeid'])){
    $postid = $_GET['ilikeid'];
}

$sqlold = "SELECT * FROM loglist WHERE id='$postid'";
$old = $conn->query($sqlold);
foreach ($old as $row) {
    $old_like[] = $row["ilike"];
}
$old_like_number = $old_like[0];
echo $old_like_number;
$ilikeadd = $old_like_number + 1;
mysqli_query($conn, "UPDATE loglist SET ilike='$ilikeadd' WHERE id = '$postid'");
mysqli_close($conn);
