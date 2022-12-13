window.addEventListener("load", main);


function main() {
    select();
    actualizarLista();
    
    document.getElementById("ci")
        .addEventListener("keyup", actualizarLista);
    document.getElementById("select")
        .addEventListener("change", select);
    document.getElementById("btn")
        .addEventListener("click", btn);
}
function actualizarLista() {
    let select = $("#select").val();
    //let nombre = document.getElementById("nombre").value;
    
    switch (select) {
        default:
            //alert("Ejecutado el Enlistar");
            Listar();
            break;
    }
}
function select() {
    let select = $("#select").val();
    let btn = $("#btn");
    btn.text(select);

    switch (select) {

        default:
            break;
    }
    actualizarLista();
}
function btn() {
    let btn = $("#btn");
    let asiento = $("#asiento").val();
    let ci = $("#ci").val();
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let email = $("#email").val();
    switch (btn.text()) {
        case "Registrar":
            Registrar([asiento, ci, nombre, apellido, email]);
        break;
        case "Cancelar":
            Cancelar([asiento]);
        break;
        case "Listar":
            Listar([]);
        break;
        case "Limpiar":
            Limpiar([]);
        break;
        default:
            break;
    }
}



///////////////////////////////////////////////////////////////
function tablaPasaje(elemento, fila) {
    //alert("entra");
    let asiento = fila.insertCell();
    let tipo = fila.insertCell();
    let ci = fila.insertCell();
    let nombre = fila.insertCell();
    let apellido = fila.insertCell();
    let email = fila.insertCell();
    if (elemento.asiento) {
        asiento.innerHTML=elemento.asiento;
        tipo.innerHTML=elemento.tipo;
        ci.innerHTML=elemento.ci;
        nombre.innerHTML=elemento.nombre;
        apellido.innerHTML=elemento.apellido;
        email.innerHTML=elemento.email;
        
        ci.setAttribute("style", "cursor:pointer");
        ci.setAttribute("class", "btn-success text-dark");
        ci.addEventListener("click", (e)=>{
            $("#asiento").val(asiento.innerText);
            $("#tipo").val(tipo.innerText);
            $("#ci").val(ci.innerText);
            $("#nombre").val(nombre.innerText);
            $("#apellido").val(apellido.innerText);
            $("#email").val(email.innerText);
            actualizarLista();
        });
        
    }else{
        nombre.innerHTML="1";
    }
    if (elemento.ci) {
        asiento.className ="bg-success";
        tipo.className ="bg-success";
        ci.className ="bg-success";
        nombre.className ="bg-success";
        apellido.className ="bg-success";
        email.className ="bg-success";
    }else{
        asiento.className ="bg-danger";
        tipo.className ="bg-danger";
        ci.className ="bg-danger";
        nombre.className ="bg-danger";
        apellido.className ="bg-danger";
        email.className ="bg-danger";
    }
    
}

function celdaVacia(contenido, fila) {
    let vacio = fila.insertCell();
                
    vacio.innerHTML=contenido;
}
///////////////////////////////////////////////////////////////

function Listar() {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Listar.php",
        dataType: "json",
        success:function(res){

            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tablaPasaje(elemento, fila);
            }  
        }
    });
}

function Registrar(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Registrar.php",
        data:{asiento:valores[0],ci:valores[1], nombre:valores[2], apellido:valores[3], email:valores[4] },
        success:function(res){
            actualizarLista();
            //alert(res);
        }
    });
}

function Cancelar(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Cancelar.php",
        data:{asiento:valores[0]},
        success:function(res){
            actualizarLista()
            //alert(res);
        }
    });
}

function Limpiar(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Limpiar.php",
        success:function(res){
            actualizarLista()
            //alert(res);
        }
    });
}