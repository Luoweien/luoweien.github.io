<?php
if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/content/sys/conn.xml')) {
    header("Location: /install/install.php");
}
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_background.php';
if ($tokens === $loginma) {
    include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_add.php';
};
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
                    var arr = testtxt.list
                    if (arr.length == 0) {
                        document.getElementById('moretxt').innerHTML = '<?php echo $L['nocontent'] ?>'
                    }
                    var y = 0;
                    for (var i = 0; i < arr.length; i++) {
                        if (arr[y].view == 'hidden') {
                            hidden = 'background-color:#004978;;color:white'
                        } else {
                            hidden = ''
                        }
                        document.getElementById('postlist').innerHTML +=
                            `
                    <div class="index-list-li" style="${hidden}">
                        <input type="hidden" value="${arr[y].view}">
                        <div class="index-list-topinfo">
                            <img class="userimg" src="<?php echo $avatarImage; ?>" onerror="this.src ='/content/icon/default.svg'">
                            <p class="user-name"><?php echo $sitename; ?></p><br>
                            <p class="list-li-date"><?php echo $L['fabuyu'] ?>${arr[y].data}</p><br>
                            <form action="/letontop_kernel/letontop_editpost.php" method="post" class="edit-post">
                                <input type="hidden" value="${arr[y].postid}" name="editpostid">
                                <input type="hidden" value="${arr[y].imgdir}" name="editimgdir">
                                <input type="hidden" value="${arr[y].imgurl}" name="editimgurl">
                                <?php if ($tokens === $loginma) {
                                    echo '<input class="deletepost" type="submit" value="' . $L["edit"] . '">';
                                } else {
                                } ?>
                            </form>
                            <form action="/letontop_kernel/letontop_deletepost.php" method="post" class="delete-post" onsubmit="return queren()">
                                <input type="hidden" value="${arr[y].postid}" name="deletepostid">
                                <input type="hidden" value="${arr[y].imgdir}" name="deleteimgdir">
                                <?php if ($tokens === $loginma) {
                                    echo '<input class="deletepost" type="submit" value="' . $L["delete"] . '">';
                                } else {
                                } ?>
                            </form>
                        </div>
                        <div class="content">
                            <div class="content-text">
                                <p>${arr[y].content}</p>
                            </div>
                            <div id="content-img${arr[y].postid}" class="content-img" style="position: relative;">
                            </div>
                            <div class="fixfloat"></div>
                        <p class="list-li-map"><img src="/content/icon/location.svg" class="list-li-location">${arr[y].map}</p>
                        <div class="content-more">
                            <div class="content-more-good">
                                <p onclick="var likeadd = ${arr[y].ilike}+1;var zan = '<img src=&quot;/content/icon/thumb-up.svg&quot; width=&quot;16px&quot; class=&quot;zan&quot;>'; this.innerHTML = zan + ' <?php echo $L['zan'] ?>' +likeadd+ '<?php echo $L['ci'] ?>';var xhre = new XMLHttpRequest(); xhre.open('get','./letontop_kernel/letontop_ilike.php?ilikeid='+${arr[y].postid});xhre.send();this.style.color ='#00a2ff';this.onclick = null;" style="color:#616161;cursor: pointer;">
                                    <img src="/content/icon/thumb-up.svg" width="16px" class="zan"> <?php echo $L['zan'] ?>${arr[y].ilike}<?php echo $L['ci'] ?>
                                </p>
                            </div>
                            <div class="content-more-share">
                                <img src="/content/icon/share-android.svg" alt="" width="22px" style="float:right;margin-top:3px;">
                            </div><br><br>
                        </div>
                    </div>
                    `
                        var imagesurl = arr[y].imgurl;
                        var imagesurls = imagesurl.split('\r');
                        var pp = 0;
                        if (imagesurls[0].length == 0) {} else {
                            for (var p = 0; p < imagesurls.length; p++) {
                                document.getElementById('content-img' + arr[y].postid).innerHTML += `
                            <div id="content-img-shell${arr[y].postid}" class="content-img-shell" onclick="openimg(this)">
                                <img id="content-imgs${arr[y].postid}" src="${imagesurls[pp]}"/>
                            </div>
                            `;
                                pp++;
                            }
                            if (imagesurls.length == 1 && imagesurls[0].length > 0) {
                                var obj = document.getElementById('content-img-shell' + arr[y].postid).style;
                                obj.width = '94%';
                                obj.height = 'auto';
                                obj.paddingTop = '0';
                                var obj1 = document.getElementById('content-imgs' + arr[y].postid).style;
                                obj1.position = 'relative';
                            }
                        }
                        var maxpp = document.getElementById('maxpp').value
                        if (arr[y].postid == maxpp) {
                            document.getElementById('moretxt').innerHTML = '<?php echo $L['nocontents'] ?>'
                        } else {
                            document.getElementById('moretxt').innerHTML = '<p><?php echo $L['addmore'] ?></p><p>﹀</p>'
                        }
                        y++
                    }
                }
            }
        }
    }
</script>