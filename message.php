<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_background.php';
?>
<div class="message">
    <div class="message_shell">
        <form action="/letontop_kernel/letontop_message-changes.php" method="post">
            <input maxlength="9" type="text" name="nickname" class="message_input" placeholder="<?php echo $L['message_nik'] ?>">
            <input maxlength="24" type="text" name="info" class="message_input" placeholder="<?php echo $L['message_mal'] ?>">
            <textarea maxlength="80" name="message" class="message_textarea" placeholder="<?php echo $L['message_mes'] ?>" required></textarea>
            <div style="width: 100%;text-align: right;margin-top:20px;padding-bottom:20px">
                <button type="submit" class="save" style="background:<?php echo $style_mainColor ?>;"><?php echo $L['siteSet_submit'] ?></button>
            </div>

        </form>
        <span class='message-info'><?php echo $L["allmessage"]; ?></span>
        <p style="float:right;margin-right:10px" class="message-info">
            <?php if ($tokens === $loginma) {
                echo '<a id="deletemessage" style="cursor: pointer;" onclick="deletemessage()">[  ' . $L['deletemessage'] . ' ]</a>';
                echo "<script>document.getElementById('deletemessage').onclick = function() {if (confirm('" . $L["deletemessageok"] . "')) { window.location.assign('letontop_kernel/letontop_message-changes.php?id=de1');}}</script>";
            }; ?>
        </p><br>
        <div class="messagelist">
            <?php
            $guestbook = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . '/content/sys/guestbook.xml');
            foreach ($guestbook->thread as $th) {
                echo "<BR>";
                echo "<span class='message-info'>" . $L['message_nik'] . "： </span><span class='message-infotitlename'>" . $th->nickname . " </span><BR>";
                echo "<span class='message-info'>" . $L['message_mal'] . "： </span><span class='message-infotitle'>";
                if ($tokens === $loginma) {
                    if ($th->info == $L['null']) {
                        echo $th->info;
                    } {
                        echo $th->info;
                    }
                } else {
                    if ($th->info == $L['null']) {
                        echo $L['null'];
                    } else {
                        echo $L['yincang'];
                    }
                }
                echo "</span><BR>";
                echo "<p class='message-infocontent'>" . $th->message . "</p>";
                echo "<p class='message-infodate'>" . $th->date . "</p>";
            }
            ?>
        </div>
    </div><br><br><br>
    <p style="width:100%;font-size:10px;text-align:center;color:#dddddd">&copy; 2019 - <?php echo date('Y') ?> <a href="https://www.leton.top/spon.html" style="color:#dddddd;background-image: none;"><u>LETON</u></a> 版权所有</p><br>
</div>