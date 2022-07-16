var bodyWidth = document.body.clientWidth;
var letonbody = document.getElementById('leton');
if(bodyWidth > 450){
    function login(){
        top.location.href = 'login.php';
    }
}
if(bodyWidth <= 450){
    var _login = document.getElementById('login');
    function login(){
        _login.style.display = 'block';
        document.getElementById('mos_zhezhao').style.display = 'block';
        document.getElementById('mos_zhezhao').style.animation = 'mohuo .3s ease 1 normal forwards';
        _login.style.animation = 'logino .3s ease 1 normal forwards';
    }
    function cancelmos(){
        setTimeout("document.getElementById('mos_zhezhao').style.display = 'none'", 300 );
        document.getElementById('mos_zhezhao').style.animation = 'mohun .3s ease 1 normal forwards';
        _login.style.animation = 'loginn .3s ease 1 normal forwards';
        setTimeout("_login.style.display = 'none'", 300 );
    }
}
