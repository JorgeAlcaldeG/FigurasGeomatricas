var selectorFig = document.getElementById("figura");
var form = document.getElementById("form");
selectorFig.addEventListener("change",()=>{cargarFigura()});

function cargarFigura(){
  console.log(selectorFig.value);
  if(selectorFig.value !="" || selectorFig.value !="null" ||selectorFig.value !=0){
    console.log(selectorFig.value);
    var formdata = new FormData();
    formdata.append('figura', selectorFig.value);
    var ajax = new XMLHttpRequest();
    ajax.open('POST', './proc/infoForm.php');
    ajax.onload=function(){
        if (ajax.status == 200) {
            res.innerHTML = "";
            form.innerHTML = ajax.responseText;
            var tipo = document.getElementById("tipo").value
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1200,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "info",
                title: "Cambiando a "+tipo
              });
        }
    }
    ajax.send(formdata);
  }else{
      document.getElementById("res").innerHTML="";
  }
}
function validatecampo(input){
  var error = document.getElementById("error"+input.id.slice(-1))
  if(input.value =="" || input.value <= 0){
    // console.log(input.placeholder);
    error.innerText = "Revisa los datos del campo "+input.placeholder;
  }else{
    error.innerText ="";
  }
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
        if(ajax.responseText != "error"){
            res.innerHTML = ajax.responseText;
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1200,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "success",
                title: "Mostrando resultados"
              });
        }else{
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 1200,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.onmouseenter = Swal.stopTimer;
                  toast.onmouseleave = Swal.resumeTimer;
                }
              });
              Toast.fire({
                icon: "error",
                title: "Revisa los datos introducidos"
              });
        }
    }
  }
  ajax.send(formdata);
}