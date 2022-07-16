<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_background.php';
if ($tokens !== $loginma) {
    header("location: /");
    die;
};
?>
<div class="about-list">
    <div class="about-list-shell">
        <div class="about-list-li">
            <form action="/letontop_kernel/letontop_editabout-changes.php" method="post">
                <table class="about-userinfo">
                    <th><?php echo $L['introduction'] ?></th>
                    <tr>
                        <td class="about-right"><?php echo $L['nickname'] ?></td>
                        <td><input type="text" name="aboutnickname" class="about-text-input" value="<?php echo $about_nickname; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['gender'] ?></td>
                        <td><input type="text" name="aboutgender" class="about-text-input" value="<?php echo $about_gender; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['age'] ?></td>
                        <td><input type="text" name="aboutage" class="about-text-input" value="<?php echo $about_age; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['vocation'] ?></td>
                        <td><input type="text" name="aboutvocation" class="about-text-input" value="<?php echo $about_vocation; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['sideline'] ?></td>
                        <td><input type="text" name="aboutsideline" class="about-text-input" value="<?php echo $about_sideline; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['company'] ?></td>
                        <td><input type="text" name="aboutcompany" class="about-text-input" value="<?php echo $about_company; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['city'] ?></td>
                        <td><input type="text" name="aboutcity" class="about-text-input" value="<?php echo $about_city; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['hometown'] ?></td>
                        <td><input type="text" name="abouthometown" class="about-text-input" value="<?php echo $about_hometown; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right"><?php echo $L['email'] ?></td>
                        <td><input type="text" name="aboutemail" class="about-text-input" value="<?php echo $about_email; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['aboutme'] ?></td>
                        <td><textarea type="text" style="width: 92%;" name="aboutaboutme" class="about-text-input" value=""><?php echo $about_aboutme; ?></textarea></td>
                    </tr>
                </table>
                <hr>
                <table class="about-userinfo">
                    <th><?php echo $L['social'] ?></th>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['socials'] ?></td>
                        <td><input type="text" name="aboutsocials" class="about-text-input" value="<?php echo $about_social; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['platform'] ?></td>
                        <td><input type="text" name="aboutplatform" class="about-text-input" value="<?php echo $about_platform; ?>"></td>
                    </tr>

                </table>
                <hr>
                <table class="about-userinfo">
                    <th><input type="text" name="aboutcustom" class="about-text-input" style="width: 50px;float: left;" value="<?php echo $about_custom; ?>"></th>
                    </tr>
                    <tr>
                        <td style="padding-left:20px"><input type="text" name="aboutcustom1" class="about-text-input" style="width: 50px;" value="<?php echo $about_custom1; ?>"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:80px"><input type="text" name="aboutcustom01" class="about-text-input" value="<?php echo $about_custom01; ?>"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:20px"><input type="text" name="aboutcustom2" class="about-text-input" style="width: 50px;" value="<?php echo $about_custom2; ?>"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:80px"><input type="text" name="aboutcustom02" class="about-text-input" value="<?php echo $about_custom02; ?>"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:20px"><input type="text" name="aboutcustom3" class="about-text-input" style="width: 50px;" value="<?php echo $about_custom3; ?>"></td>
                    </tr>
                    <tr>
                        <td style="padding-left:80px"><input type="text" name="aboutcustom03" class="about-text-input" value="<?php echo $about_custom03; ?>"></td>
                </table>
                <hr>
                <table class="about-userinfo">
                    <th><?php echo $L['more'] ?></th>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['hobby'] ?></td>
                        <td><input type="text" name="abouthobby" class="about-text-input" value="<?php echo $about_hobby; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['skill'] ?></td>
                        <td><input type="text" name="aboutskill" class="about-text-input" value="<?php echo $about_skill; ?>"></td>
                    </tr>
                    <tr>
                        <td class="about-right" valign="top"><?php echo $L['explain'] ?></td>
                        <td><textarea type="text" style="width: 92%;" name="aboutexplain" class="about-text-input" value=""><?php echo $about_explain; ?></textarea></td>
                    </tr>
                </table>
                <hr>
                <div style="width: 100%;text-align: center;">
                    <button type="submit" class="save" style="background:<?php echo $style_mainColor ?>;"><?php echo $L['siteSet_save'] ?></button>
                </div>
            </form>
            <br>
            <p style="width:100%;font-size:10px;text-align:center;color:#dddddd">&copy; 2019 - <?php echo date('Y') ?> <a href="https://www.leton.top/spon.html" style="color:#dddddd;background-image: none;"><u>LETON</u></a> 版权所有</p><br>
        </div>
    </div>
</div>