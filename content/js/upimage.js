
function showPreview(source) {
    var file = source.files[0];
    if (window.FileReader) {
        var fr = new FileReader();
        fr.onloadend = function (e) {
            document.getElementById(0).src = e.target.result;
        };
        fr.readAsDataURL(file);
    }
}
function addimage(){
    document.getElementById('0').style.zIndex = '1';
}
function deleimage(){
    document.getElementById('inp').value = '';
    document.getElementById('0').src = '/content/icon/null.svg';
    document.getElementById('0').style.zIndex = '0';

}