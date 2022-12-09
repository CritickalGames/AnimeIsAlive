window.addEventListener("load", main);


function main() {
    alert("Inicia");
    select();
    
    
    document.getElementById("nombre")
        .addEventListener("keyup", actualizarLista);
    document.getElementById("select")
        .addEventListener("change", select);
    document.getElementById("btn")
        .addEventListener("click", btn);
}
function actualizarLista() {
    let select = $("#select").val();
    let nombre = document.getElementById("nombre").value;
    
    switch (select) {
        case "Buscar":
            BuscarAll([nombre]);
        break;
        default:
            //alert("Ejecutado el Enlistar");
            BuscarNombre([nombre]);
            break;
    }
}
function select() {
    let select = $("#select").val();
    let btn = $("#btn");
    btn.text(select);

    $("#btn").prop('disabled', false);
    $("#telefono").prop('disabled', false).attr("placeholder", "Telefono");
    $("#nombre").prop('disabled', false).attr("placeholder", "Nombre");
    $("#apellido").prop('disabled', false).attr("placeholder", "Apellido");
    $("#fechanac").prop('disabled', false);

    switch (select) {
        case "Subir":
        break;
        case "Borrar":
            $("#nombre").prop('disabled', true);
            $("#apellido").prop('disabled', true);
            $("#fechanac").prop('disabled', true);
        break;
        case "Buscar":
            $("#btn").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#apellido").prop('disabled', true);
            $("#fechanac").prop('disabled', true);
        break;
        case "Editar":
        break;
        case "Listar":
            Listar([]);
            $("#btn").prop('disabled', true);
            $("#telefono").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#apellido").prop('disabled', true);
            $("#fechanac").prop('disabled', true);
        break;
        default:
            break;
    }
    actualizarLista();
}
function btn() {
    let btn = $("#btn");
    let telefono = $("#telefono").val();
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let fechanac = $("#fechanac").val();
    switch (btn.text()) {
        case "Subir":
            Subir([telefono, nombre, apellido, fechanac]);
        break;
        case "Borrar":
            Borrar([telefono]);
        break;
        case "Buscar":
        break;
        case "Editar":
        break;
        case "Listar":
            Listar([]);
        break;
        case "Editar ":
            Editar([telefono, nombre, apellido, fechanac]);
        break;
        case "Opinión":
        break;
        default:
            break;
    }
}



///////////////////////////////////////////////////////////////
function tabla(elemento, fila) {
    //alert("entra");
    let nombre = fila.insertCell();
    if (elemento.nombre) {
        nombre.innerHTML=elemento.nombre;
        let temporada= elemento.temporada;
        
        nombre.setAttribute("style", "cursor:pointer");
        nombre.setAttribute("class", "btn-success text-dark");
        nombre.addEventListener("click", (e)=>{
            $("#telefono").val(nombre.innerText);
            $("#nombre").val(temporada);
            actualizarLista();
        });
        
    }else{
        nombre.innerHTML="";
    }
}

function celdaVacia(contenido, fila) {
    let vacio = fila.insertCell();
                
    vacio.innerHTML=contenido;
}
///////////////////////////////////////////////////////////////
function Borrar(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/Borrar.php",
        data:{telefono:valores[0]},
        success:function(res){
            //alert(res);
            $("#nombre").val(($("#nombre").val().charAt(0)));
            actualizarLista();
            $("#nombre").val("");
        }
    });
}

function BuscarNombre(valores) {
    $("#noBorrar").nextAll("tr").remove();
    //alert("Entrar al Buscar");
    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/BuscarNombre.php",
        data:{nombre:valores[0], apellidos:valores[0]},
        dataType: "json",
        success:function(res){
            //alert(res);
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

function Contar(valores) {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/Contar.php",
        dataType: "json",
        success:function(res){
            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = $("#table");
                //alert("entra");
                let fila = tabla.insertRow();
                celdaVacia(JSON.stringify(data), fila);
                tabla("", fila);
        }
    });
}

function Editar(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/Editar.php",
        data:{telefono:valores[0], 
                nombre:valores[1], apellido:valores[2], fecha:valores[3]},
        success:function(res){
            actualizarLista()

            //alert(res);
        }
    });
}

function Listar() {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/Listar.php",
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

function Subir(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/DATOS/Subir.php",
        data:{temporada:valores[0], nombre:valores[1],apellido:valores[2], fecha:valores[3]},
        success:function(res){
            actualizarLista()
            //alert(res);
        }
    });
}
