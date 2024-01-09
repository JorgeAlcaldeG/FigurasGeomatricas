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
            form.innerHTML = ajax.responseText;
        }
    }
    ajax.send(formdata);
}