<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_background.php';
$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接: ' . mysqli_connect_error());
}
$sqlold = "SELECT id FROM loglist ";
$old = $conn->query($sqlold);

foreach ($old as $number => $row) {
    $oldid[] = $row["id"];
}
if (empty($oldid[0])) {
    $load_end = null;
} else {
    $load_end = $oldid[0];
}
mysqli_close($conn);
?>
<input type="hidden" value="<?php echo $load_end; ?>" id="maxpp">
<div class="index-list">
    <div class="index-list-shell" id="postlist">
    </div>
    <div class="loading noselect"><button class="loading" onclick="loadingmore()" id="moretxt"></button></div>
</div>
<script>
    window.onload = function() {
        loadingmore();
    }
    var doublenumber = 1

    function loadingmore() {
        var xhr = new XMLHttpRequest();
        xhr.open('post', './letontop_kernel/letontop_index-class.php');
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
        xhr.send("post=" + doublenumber);
        doublenumber++
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var testtxt = JSON.parse(xhr.responseText);
                    var arr = testtxt.list;
                    if (arr.length == 0) {
                        document.getElementById('moretxt').innerHTML = '<?php echo $L['nocontent'] ?>'
                    }
                    document.getElementById('postlist').innerHTML +=
                        `
                            <div class="pic-shell">
                                <div id="content-img" class="content-img" style="position: relative;display: flex;flex-wrap: wrap;justify-content: center;max-width: 100%">
                                </div>
                            </div>
                        `
                    var y = 0;
                    for (var i = 0; i < arr.length; i++) {
                        var imagesurl = arr[y].imgurl;
                        var imagesurls = imagesurl.split('\r');
                        if (imagesurls[0].length == 0) {} else {
                            for (var p = 0; p < imagesurls.length; p++) {
                                document.getElementById('content-img').innerHTML += `
                                <div id="content-img-shell" class="content-img-shell" onclick="openimg(this)">
                                    <img id="content-imgs" src="${imagesurls[p]}"/>
                                </div>
                            `;
                            }
                        }
                        var maxpp = document.getElementById('maxpp').value
                        if (arr[y].postid == maxpp) {
                            document.getElementById('moretxt').innerHTML = '<?php echo $L['nocontents'] ?>'
                        } else {
                            document.getElementById('moretxt').innerHTML = '<p style="line-height:5px;"><?php echo $L['addmore'] ?></p><p style="line-height:5px">﹀</p>'
                        }
                        y++
                    }
                }
            }
        }
    }
</script>