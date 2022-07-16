var bodyWidth = document.body.clientWidth;
if(bodyWidth > 450){
    var a = 1;
    function opengeneral(){
        obj = document.getElementById('set_general').style;
        if(a == 1){
            document.getElementById('gen').innerHTML = '︿';
            obj.height = 'auto';
            a = 2;
            return;
        }if(a == 2){
            document.getElementById('gen').innerHTML = '﹀';
            obj.height = '35px';
            a = 1;
            return;
        }
    }
    var b = 1;
    function opentheme(){
        obj = document.getElementById('set_theme').style;
        if(b == 1){
            document.getElementById('the').innerHTML = '︿';
            obj.height = 'auto';
            b = 2;
            return;
        }if(b == 2){
            document.getElementById('the').innerHTML = '﹀';
            obj.height = '35px';
            b = 1;
            return;
        }
    }
    var c = 1;
    function openpersonal(){
        obj = document.getElementById('set_personal').style;
        if(c == 1){
            document.getElementById('per').innerHTML = '︿';
            obj.height = 'auto';
            c = 2;
            return;
        }if(c == 2){
            document.getElementById('per').innerHTML = '﹀';
            obj.height = '35px';
            c = 1;
            return;
        }
    }
    var d = 1;
    function openprivacy(){
        obj = document.getElementById('set_privacy').style;
        if(d == 1){
            document.getElementById('pri').innerHTML = '︿';
            obj.height = 'auto';
            d = 2;
            return;
        }if(d == 2){
            document.getElementById('pri').innerHTML = '﹀';
            obj.height = '35px';
            d = 1;
            return;
        }
    }
    var f = 1;
    function openother(){
        obj = document.getElementById('set_other').style;
        if(f == 1){
            document.getElementById('oth').innerHTML = '︿';
            obj.height = 'auto';
            f = 2;
            return;
        }if(f == 2){
            document.getElementById('oth').innerHTML = '﹀';
            obj.height = '35px';
            f = 1;
            return;
        }
    }
}
if(bodyWidth <= 450){
        var a = 1;
        function opengeneral(){
            obj = document.getElementById('set_general').style;
            if(a == 1){
                document.getElementById('gen').innerHTML = '︿';
                obj.height = 'auto';
                a = 2;
                return;
            }if(a == 2){
                document.getElementById('gen').innerHTML = '﹀';
                obj.height = '45px';
                a = 1;
                return;
            }
        }
        var b = 1;
        function opentheme(){
            obj = document.getElementById('set_theme').style;
            if(b == 1){
                document.getElementById('the').innerHTML = '︿';
                obj.height = 'auto';
                b = 2;
                return;
            }if(b == 2){
                document.getElementById('the').innerHTML = '﹀';
                obj.height = '45px';
                b = 1;
                return;
            }
        }
        var c = 1;
        function openpersonal(){
            obj = document.getElementById('set_personal').style;
            if(c == 1){
                document.getElementById('per').innerHTML = '︿';
                obj.height = 'auto';
                c = 2;
                return;
            }if(c == 2){
                document.getElementById('per').innerHTML = '﹀';
                obj.height = '45px';
                c = 1;
                return;
            }
        }
        var d = 1;
        function openprivacy(){
            obj = document.getElementById('set_privacy').style;
            if(d == 1){
                document.getElementById('pri').innerHTML = '︿';
                obj.height = 'auto';
                d = 2;
                return;
            }if(d == 2){
                document.getElementById('pri').innerHTML = '﹀';
                obj.height = '45px';
                d = 1;
                return;
            }
        }
        var f = 1;
        function openother(){
            obj = document.getElementById('set_other').style;
            if(f == 1){
                document.getElementById('oth').innerHTML = '︿';
                obj.height = 'auto';
                f = 2;
                return;
            }if(f == 2){
                document.getElementById('oth').innerHTML = '﹀';
                obj.height = '45px';
                f = 1;
                return;
            }
        }
}