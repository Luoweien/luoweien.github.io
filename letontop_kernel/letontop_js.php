<?php
?>
<script>
var windowcode = sessionStorage['windows'];
var codeNumber = '0';
if (windowcode == '1') {
    codeNumber = '<?php echo $L['welcome'] ?>';
}
if (windowcode == '2') {
    codeNumber = '<?php echo $L['settingok'] ?>';
}
if (windowcode == '3') {
    codeNumber = '<?php echo $L['saveok'] ?>';
}
if (windowcode == '4') {
    codeNumber = '<?php echo $L['submitok'] ?>';
}
if (windowcode == '5') {
    codeNumber = '<?php echo $L['deleteok'] ?>';
}
if (windowcode == '6') {
    codeNumber = '<?php echo $L['deletimgeok'] ?>';
}
if (windowcode == '7') {
    codeNumber = '<?php echo $L['fabuok'] ?>';
}
if (windowcode == '8') {
    codeNumber = '<?php echo $L['liuyancuowu'] ?>';
}
if (windowcode == '9') {
    codeNumber = '<?php echo $L['logoutok'] ?>';
}
if (windowcode == '10') {
    codeNumber = '<?php echo $L['20sres'] ?>';
}
if (windowcode == 'notfound') {
    codeNumber = '<span style="color:yellow;background: red;border-radius: 50px;padding: 0 10px;"><?php echo $L['notfound'] ?></span>';
}
if (codeNumber == '0') {} else {
    document.getElementById('window').innerHTML = codeNumber + `<div class="window" onclick="windowsx()">╳</div>`;
    setTimeout("document.getElementById('window').style.marginTop = '0px'", 300);
    setTimeout("document.getElementById('window').style.marginTop = '-50px'", 3000);
    sessionStorage.setItem('windows', '0');
}

function windowsx() {
    document.getElementById('window').style.marginTop = '-50px';
}

function login_in() {
    var xhr = new XMLHttpRequest();
    var user = document.getElementById('adminuser').value;
    var pass = document.getElementById('adminpass').value;
    xhr.open('get', '/letontop_kernel/letontop_login-class.php?user=' + user + '&pass=' + pass);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                if (xhr.response == 0) {
                    document.getElementById('login-pand').innerHTML = `<?php echo $L['loginnull'] ?>`;
                    document.getElementById('login').style.animation = 'dengludoudong .3s ease 1 normal forwards';
                    setTimeout("document.getElementById('login').style.animation = 'none'", 300);
                }
                if (xhr.response == 1) {
                    document.getElementById('login-pand').innerHTML = `<?php echo $L['loginerror'] ?>`;
                    document.getElementById('login').style.animation = 'dengludoudong .3s ease 1 normal forwards';
                    setTimeout("document.getElementById('login').style.animation = 'none'", 300);
                }
                if (xhr.response == 'ok') {
                    document.getElementById('')
                    cancelmos()
                    sessionStorage.setItem('windows', '1')
                    setTimeout("location.reload()", 300);
                }
            }
        }
    }
}

function openqr() {
    document.getElementById('mos_zhezhao').style.display = 'block';
    document.getElementById('mos_zhezhao').style.animation = 'mohuo .3s ease 1 normal forwards';
    document.getElementById('picshell').innerHTML = `
        <div class='qrshell' onclick='offqr()'>
        <div class="qr">
            <img id="qr" src="<?php echo $qrCode; ?>" alt="qrcode" onerror="this.src ='./content/icon/default.svg'">
        <div>
        `;
    document.getElementById('qr').style.animation = 'qro .3s ease 1 normal forwards';
};

function offqr() {
    setTimeout("document.getElementById('mos_zhezhao').style.display = 'none'", 300);
    document.getElementById('mos_zhezhao').style.animation = 'mohun .3s ease 1 normal forwards';
    setTimeout("document.getElementById('picshell').innerHTML = ''", 300);
    document.getElementById('qr').style.animation = 'qrn .3s ease 1 normal forwards';
};

function queren() {
    var queren = confirm('<?php echo $L['deletepost'] ?>')
    if (queren == true) {
        return true;
    } else {
        return false;
    }
}
function deleteback(){
if (confirm("<?php echo $L['deletebackground'] ?>")) {
    window.location.assign('le_deleteimage.php?id=bj');
}
}
function deleteavatar(){
    if (confirm("<?php echo $L['deleteatavar'] ?>")) {
        window.location.assign('letontop_deleteimage.php?id=tx');
    }
}
function deleteqrcode(){
    if (confirm("<?php echo $L['deleteqrcode'] ?>")) {
        window.location.assign('letontop_deleteimage.php?id=qr');
    }
}
function deletevisit(){
    if (confirm("<?php echo $L['deletevisit'] ?>")) {
        window.location.assign('letontop_deleteimage.php?id=visit');
    }
}
function deletelogin(){
    if (confirm("<?php echo $L['deletelogin'] ?>")) {
        window.location.assign('letontop_deleteimage.php?id=login');
    }
}
</script>
<script src="/content/js/login.js"></script>
<script src="/content/js/lightbox.js"></script>
<script src="/content/js/upimage.js"></script>