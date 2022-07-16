<?php
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/letontop_kernel/letontop_background.php';
?>
<div class="about-list">
    <div class="list-shell">
        <div class="about-list-li">
            <p style="float:right;margin-right:10px;font-size:10px">
                <?php if ($tokens === $loginma) {
                    echo '<a href="/letontop_kernel/letontop_editabout.php">[ ' . $L["edit"] . ' ]</a>';
                }; ?></p>
            <table class="about-userinfo">
                <th><?php echo $L['introduction'] ?></th>
                <tr>
                    <td class="about-right"><?php echo $L['nickname'] ?></td>
                    <td><?php echo $about_nickname; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['gender'] ?></td>
                    <td><?php echo $about_gender; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['age'] ?></td>
                    <td><?php echo $about_age; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['vocation'] ?></td>
                    <td><?php echo $about_vocation; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['sideline'] ?></td>
                    <td><?php echo $about_sideline; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['company'] ?></td>
                    <td><?php echo $about_company; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['city'] ?></td>
                    <td><?php echo $about_city; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['hometown'] ?></td>
                    <td><?php echo $about_hometown; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $L['email'] ?></td>
                    <td><?php echo $about_email; ?></td>
                </tr>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['aboutme'] ?></td>
                    <td><?php echo $about_aboutme; ?></td>
                </tr>
            </table>
            <hr>
            <table class="about-userinfo">
                <th><?php echo $L['social'] ?></th>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['socials'] ?></td>
                    <td><?php echo $about_social; ?></td>
                </tr>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['platform'] ?></td>
                    <td><?php echo $about_platform; ?></td>
                </tr>

            </table>
            <hr>
            <table class="about-userinfo">
                <th><?php echo $about_custom; ?></th>
                <tr>
                    <td class="about-right"><?php echo $about_custom1; ?></td>
                    <td><?php echo $about_custom01; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $about_custom2; ?></td>
                    <td><?php echo $about_custom02; ?></td>
                </tr>
                <tr>
                    <td class="about-right"><?php echo $about_custom3; ?></td>
                    <td><?php echo $about_custom03; ?></td>
                </tr>
            </table>
            <hr>
            <table class="about-userinfo">
                <th><?php echo $L['more'] ?></th>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['hobby'] ?></td>
                    <td><?php echo $about_hobby; ?></td>
                </tr>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['skill'] ?></td>
                    <td><?php echo $about_skill; ?></td>
                </tr>
                <tr>
                    <td class="about-right" valign="top"><?php echo $L['explain'] ?></td>
                    <td><?php echo $about_explain; ?></td>
                </tr>
            </table>
            <hr>
            <br>
            <p style="width:100%;font-size:10px;text-align:center;color:#dddddd">&copy; 2019 - <?php echo date('Y') ?> <a href="https://www.leton.top/spon.html" style="color:#dddddd;background-image: none;"><u>LETON</u></a> 版权所有</p><br>
        </div>
    </div>
</div>