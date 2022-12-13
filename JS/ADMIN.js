window.addEventListener("load", main);


function main() {
    select();
    
    
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
    alert(btn.text());

    switch (select) {

        default:
            break;
    }
    actualizarLista();
}
function btn() {
    let btn = $("#btn");
    let aciento = $("#aciento").val();
    let ci = $("#ci").val();
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let email = $("#email").val();
    switch (btn.text()) {
        case "Registrar":
            Registrar([aciento, ci, nombre, apellido, email]);
        break;
        case "Cancelar":
            Cancelar([aciento]);
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
function tabla(elemento, fila) {
    //alert("entra");
    let aciento = fila.insertCell();
    let tipo = fila.insertCell();
    let ci = fila.insertCell();
    let nombre = fila.insertCell();
    let apellido = fila.insertCell();
    let email = fila.insertCell();
    if (elemento.ci) {
        aciento.innerHTML=elemento.aciento;
        tipo.innerHTML=elemento.tipo;
        ci.innerHTML=elemento.ci;
        nombre.innerHTML=elemento.nombre;
        apellido.innerHTML=elemento.apellido;
        email.innerHTML=elemento.email;
        
        ci.setAttribute("style", "cursor:pointer");
        ci.setAttribute("class", "btn-success text-dark");
        ci.addEventListener("click", (e)=>{
            $("#aciento").val(aciento.innerText);
            $("#tipo").val(tipo.innerText);
            $("#ci").val(ci.innerText);
            $("#nombre").val(nombre.innerText);
            $("#apellido").val(apellido.innerText);
            $("#email").val(email.innerText);
            actualizarLista();
        });
        
    }else{
        nombre.innerHTML="";
    }
    if (elemento.nombre) {
        nombre.innerHTML=elemento.nombre;
        
    }else{
        nombre.innerHTML="";
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
            let tabla = $("#table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tabla(elemento, fila);
            }  
        }
    });
}

function Registrar(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Registrar.php",
        data:{aciento:valore[0],ci:valore[1], nombre:valore[2], apellido:valore[3], email:valore[4] },
        success:function(res){
            actualizarLista()
            //alert(res);
        }
    });
}

function Cancelar(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/PASAJE/Cancelar.php",
        data:{aciento:valore[0]},
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