<?php
?>
<link rel="stylesheet" href="/content/css/add.css">
<div id="fabudonghua" class="fabudonghua" style="display:none"><img src="/content/icon/loading.svg" alt=""><p><?php echo $L['fabuzhong']?></p></div>
<div class="add-shell">
    <form action="/letontop_kernel/letontop_add-class.php" method="post" enctype="multipart/form-data">
        <div class="add noselect">
            <img src="/content/icon/new.svg" class="newsvg">
            <p><?php echo $L['addpost'] ?></p>
            <div class="edit">
                <textarea class="edits" placeholder="<?php echo $L['addposts'] ?>" name="content"></textarea>

                <div id="div" class="newpic noselect" style="display: block;">
                    <img class="upimgsh" id="0" onclick="deleimage()">
                    <img src="/content/icon/image.svg" width="35px">
                    <p><?php echo $L['uploadpic'] ?></p>
                    <input id="inp" type="file" class="uploadimg" name="pic" onchange="showPreview(this);addimage()">
                </div>
                <div class="fixfloat"></div>
            </div>
            <div class="metainfo noselect">
                <div class="metainfo-more">
                    <b class="allview noselect">
                        <input type="hidden" checked="checked" name="selectview" value="hidden">
                        <input type="checkbox" id="hidden" checked="checked" name="selectview" value="display">
                        <label for="hidden"><?php echo $L['allview'] ?></label>
                    </b>
                    &nbsp;<img src="/content/icon/time.svg" onclick="document.getElementById('selecttime').style.display= 'inline'">
                    <div class="select" id="selecttime" style="display:none">
                        <input type="text" name="selectdate" class="selectinput" value="<?php echo date($setting_Timetype) ?>">
                        <img src="/content/icon/add.svg" width="20" class="delete" onclick="document.getElementById('selecttime').style.display= 'none'">
                    </div>
                    &nbsp;<img src="/content/icon/map.svg" onclick="document.getElementById('selectmap').style.display= 'inline'">
                    <div class="select" id="selectmap" style="display:none">
                        <input type="text" name="selectmp" class="selectinput" placeholder="<?php echo $L['youmap'] ?>" value="<?php echo $siteimap; ?>">
                        <img src="/content/icon/add.svg" width="20" class="delete" onclick="document.getElementById('selectmap').style.display= 'none'">
                    </div>&nbsp;
                </div>
                <div class="metainfo-submit">
                    <input type="submit" name="" id="tijiao" style="display:none">
                    <label onclick="tijiao()">
                        <p class="fabu noselect"><b><?php echo $L['fabu'] ?> <img src="/content/icon/send.svg" style="margin-right:-6px;margin-bottom: -2px;"></b></p>
                    </label>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
function tijiao(){
    document.getElementById('fabudonghua').style.opacity = '0';
    document.getElementById('fabudonghua').style.display = 'flex';
    document.getElementById('fabudonghua').style.animation = 'index-picture .3s ease 1s normal forwards';
    setTimeout("document.getElementById('tijiao').click();",10);
}
</script>