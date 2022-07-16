<div class="background-image">
    <div class="bg-info-shell">
        <div class="bg-shell">
            <div class="bg-info">
                <div class="info">
                    <span class="indexname"><?php echo $nickName; ?><img id="qridstroke" src='/content/icon/qr.svg' alt='qr' onclick="openqr()"></span><br>
                    <span class="indexdesc"><?php echo $siteOnes; ?></span>
                </div>
            </div>
            <a onclick="openimg(this)">
                <img src="<?php echo $avatarImage; ?>" onerror="this.src ='/content/icon/default.svg'" id="background-usimg" title="<?php echo $L['avatartitle']; ?>">
            </a>
            <div class="bg-more">
                <?php
                $counter = intval(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/content/sys/counter.dat"));
                if (!$_SESSION['#']) {
                    $_SESSION['#'] = true;
                    $counter++;
                    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/content/sys/counter.dat", "w");
                    fwrite($fp, $counter);
                    fclose($fp);
                }
                $todaycounter = intval(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/content/sys/countertoday.dat"));
                if (!$_SESSION['##']) {
                    $_SESSION['##'] = true;
                    $todaycounter++;
                    $fp1 = fopen($_SERVER['DOCUMENT_ROOT'] . "/content/sys/countertoday.dat", "w");
                    fwrite($fp1, $todaycounter);
                    fclose($fp1);
                }
                ?>
                <p class="siteview"><?php echo $L['siteview'] ?> <?php echo "$todaycounter"; ?></p>
                <p class="siteview1"><?php echo $L['siteview1'] ?> <?php echo "$counter"; ?></p>
            </div>
        </div>
    </div>
    <div class="back-shell"><img class="background-img" src="<?php echo $backgroundImage; ?>" onerror="this.src ='/content/icon/default.svg'" style="<?php echo $style_topbarTop; ?>"></div>
</div>
<div class="navbar">
    <div class="navbar-shell">
        <a href="/">
            <div class="barlist"><img src="/content/icon/Index.svg" alt="home">
                <p><?php echo $L['home'] ?></p>
            </div>
        </a>
        <a href="/picture.php">
            <div class="barlist"><img src="/content/icon/Picture.svg" alt="image">
                <p><?php echo $L['picture'] ?></p>
            </div>
        </a>
        <a href="/message.php">
            <div class="barlist"><img src="/content/icon/Message.svg" alt="Message">
                <p><?php echo $L['message'] ?></p>
            </div>
        </a>
        <a href="/about.php">
            <div class="barlist"><img src="/content/icon/About.svg" alt="spam">
                <p><?php echo $L['about'] ?></p>
            </div>
        </a>
    </div>
</div>
<br>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_js.php' ?>