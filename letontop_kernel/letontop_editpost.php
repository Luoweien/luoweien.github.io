<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};
$conn = mysqli_connect($install_localurl, $install_localuse, $install_localpass, $install_localdbname);
if (!$conn) {
    die('无法连接:' . mysqli_connect_error());
}
$postid = $_POST['editpostid'];
$msq = "SELECT * FROM loglist Where id='$postid'";
$chaxun = $conn->query($msq);
foreach ($chaxun as $key => $row) {
    $editpostpoid[] = $row['id'];
    $editpostdate[] = $row['adddate'];
    $editpostcont[] = $row['content'];
    $editpostimgd[] = $row['imgid'];
    $editpostimgu[] = $row['imgiu'];
    $editpostmaps[] = $row['map'];
    $editpostview[] = $row['view'];
}
$imagesdirs = $editpostimgd[0];
$imagesurl = $editpostimgu[0];
if($imagesurl == ''){
    $imagesurl = '/content/icon/null.svg';
}
if ($editpostview[0] == 'display') {
    $view = 'checked="checked"';
} else {
    $view = '';
}
?>
<link rel="stylesheet" href="/content/css/add.css">
<div class="top" style="background: <?php echo $style_mainColor ?>;<?php echo $style_topbarTop; ?>;    width: 100%;height: 50px;position: absolute;top: 0;"></div>
<div id="fabudonghua" class="fabudonghua" style="display:none"><img src="/content/icon/loading.svg" alt=""><p><?php echo $L['tijiaozhong']?></p></div>
<br>
<div class="add">
    <div class="add-shell">
        <form action="/letontop_kernel/letontop_editpost-changes.php" method="post" enctype="multipart/form-data">
            <img src="/content/icon/new.svg" class="newsvg">
            <p><?php echo $L['editpost'] ?></p>
            <input type="hidden" name="editpostid" value="<?php echo $editpostpoid[0]; ?>">
            <div class="edit">
                <textarea class="edits" placeholder="<?php echo $L['addposts'] ?>" name="content"><?php echo str_replace("<br>","\r", $editpostcont[0],$i); ?></textarea>
                
                <div id="div" class="newpic noselect">
                    <img class="upimgsh" src="<?php echo $imagesurl; ?>" alt="<?php echo $imagesurl; ?>" id="0" onclick="deleimage();deleimages()">
                    <img src="/content/icon/image.svg" width="35px">
                    <p><?php echo $L['uploadpic'] ?></p>
                    <input type="hidden" id="pic00" name="pic000" value="default">
                    <input type="hidden" name="pic0000" value="<?php echo $imagesdirs; ?>">
                    <input type="hidden" name="pic00000" value="<?php echo $imagesurl; ?>">
                    <input id="inp" type="file" class="uploadimg" name="pic" onchange="showPreview(this);addimage();deleimages()">
                </div>
                <div class="fixfloat"></div>
            </div>
            <div class="metainfo noselect">
                <div class="metainfo-more">
                    <b class="allview noselect">
                        <input type="hidden" checked="checked" name="selectview" value="hidden">
                        <input type="checkbox" id="hidden" <?php echo $view; ?> name="selectview" value="display">
                        <label for="hidden"><?php echo $L['allview'] ?></label>
                    </b>
                    &nbsp;<img src="/content/icon/time.svg" onclick="document.getElementById('selecttime').style.display= 'inline'">
                    <div class="select" id="selecttime" style="display:none">
                        <input type="text" name="selectdate" class="selectinput" value="<?php echo $editpostdate[0]; ?>">
                        <img src="/content/icon/add.svg" width="20" class="delete" onclick="document.getElementById('selecttime').style.display= 'none'">
                    </div>
                    &nbsp;<img src="/content/icon/map.svg" onclick="document.getElementById('selectmap').style.display= 'inline'">
                    <div class="select" id="selectmap" style="display:none">
                        <input type="text" name="selectmp" class="selectinput" placeholder="<?php echo $L['youmap'] ?>" value="<?php echo $editpostmaps[0]; ?>">
                        <img src="/content/icon/add.svg" width="20" class="delete" onclick="document.getElementById('selectmap').style.display= 'none'">
                    </div>&nbsp;
                </div>
                <div class="metainfo-submit">
                    <input type="submit" name="" id="tijiao" style="display:none">
                    <label onclick="tijiao()">
                        <p class="fabu noselect"><b><?php echo $L['siteSet_submit'] ?> <img src="/content/icon/send.svg" style="margin-right:-6px;margin-bottom: -2px;"></b></p>
                    </label>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_js.php' ?>
<script>
function tijiao(){
    document.getElementById('fabudonghua').style.opacity = '0';
    document.getElementById('fabudonghua').style.display = 'flex';
    document.getElementById('fabudonghua').style.animation = 'index-picture .3s ease 1s normal forwards';
    setTimeout("document.getElementById('tijiao').click();",10);
}
        var test = document.getElementById(0).alt;
        if (test.indexOf("/content/icon/null.svg") == -1) {
            document.getElementById(0).style.zIndex = '999';
        } else {
            document.getElementById(0).style.zIndex = '0';
        }
    var del0 = 0;

    function deleimages() {
        var test0 = document.getElementById(0).alt;
        if (test0.indexOf("/content/icon/null.svg") == -1) {
            if (del0 == 0) {
                document.getElementById('pic00').value = "delete";
                del0++;
                return;
            }
            if (del0 == 1) {
                document.getElementById('pic00').value = "replace";
                del0--;
                return;
            }
        } else {
            if (del0 == 0) {
                document.getElementById('pic00').value = "addto";
                del0++;
                return;
            }
            if (del0 == 1) {
                document.getElementById('pic00').value = "default";
                del0--;
                return;
            }
        }
    }
</script>