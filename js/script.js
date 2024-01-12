var selectorFig = document.getElementById("figura");
var form = document.getElementById("form");
selectorFig.addEventListener("change",()=>{cargarFigura()});

function cargarFigura(){
    var formdata = new FormData();
    formdata.append('figura', selectorFig.value);
    var ajax = new XMLHttpRequest();
    ajax.open('POST', './proc/infoForm.php');
    ajax.onload=function(){
        if (ajax.status == 200) {
            res.innerHTML = "";
            form.innerHTML = ajax.responseText;
        }
    }
    ajax.send(formdata);
}

function calculardatos(){
    var res = document.getElementById("res")
    var figura = document.getElementById("tipo")
    var lado1 = document.getElementById("lado1");
    console.log(document.getElementsByTagName("form")[0].childElementCount)
    var formdata = new FormData();
    formdata.append('figura', figura.value);
    formdata.append('lado1', lado1.value);
    if(document.getElementsByTagName("form")[0].childElementCount == 4){
        var lado2 = document.getElementById("lado2");
        formdata.append('lado2', lado2.value);
    }
    if(document.getElementsByTagName("form")[0].childElementCount == 5){
        var lado2 = document.getElementById("lado2");
        formdata.append('lado2', lado2.value);
        var lado2 = document.getElementById("lado3");
        formdata.append('lado3', lado3.value);
    }
    var ajax = new XMLHttpRequest();
    ajax.open('POST', './proc/resForm.php');
    ajax.onload=function(){
        if (ajax.status == 200) {
            res.innerHTML = ajax.responseText;
        }
    }
    ajax.send(formdata);
}