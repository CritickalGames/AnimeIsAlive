window.addEventListener("load", main);


function main() {
    select();
    
    document.getElementById("nombre")
        .addEventListener("keyup", actualizarLista);
    document.getElementById("selector")
        .addEventListener("change", select);
    document.getElementById("boton")
        .addEventListener("click", boton);
}
function actualizarLista() {
    let select = $("#selector").val();
    let nombre = document.getElementById("nombre").value;
    
    switch (select) {
        case "Buscar":
            BuscarAnimeAll([nombre]);
        break;
        default:
            //alert("Ejecutado el Enlistar");
            BuscarAnimeNombre([nombre]);
            break;
    }
}
function select() {
    let select = $("#selector").val();
    let btn = $("#boton");
    btn.text(select);

    $("#boton").prop('disabled', false);
    $("#nombre").prop('disabled', false).attr("placeholder", "Nombre");
    $("#temporada").prop('disabled', false).attr("placeholder", "Temporada");
    $("#capitulo").prop('disabled', false).attr("placeholder", "Capitulo");
    $("#estado").prop('disabled', false);
    $("#opinon").prop('disabled', false).attr("placeholder", "Opinión");

    switch (select) {
        case "Subir":
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Borrar":
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Buscar":
            $("#boton").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Editar":
            $("#boton").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Listar":
            ListarAnime(["Anime"]);
            $("#boton").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Inicial":
            actualizarLista();

            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Contar":
            ContarAnime(["Anime"]);
            $("#boton").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#estado").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Editar ":
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Nuevo Capitulo":
            $("#opinon").prop('disabled', true);
        break;
    
        default:
            break;
    }
    actualizarLista();
}
function boton() {
    let btn = $("#boton");
    let nombre = document.getElementById("nombre").value;
    let temporada = document.getElementById("temporada").value;
    let capitulo = document.getElementById("capitulo").value;
    let estado = document.getElementById("estado").value;
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
function tablaANIME(elemento, fila) {
    //alert("entra");
    let nombre = fila.insertCell();
    if (elemento.nombre) {
        nombre.innerHTML=elemento.nombre;
        
        nombre.setAttribute("style", "cursor:pointer");
        nombre.setAttribute("class", "btn-success text-dark");
        nombre.addEventListener("click", (e)=>{
            $("#nombre").val(nombre.innerText);
            actualizarLista();
        });
        
    }else{
        nombre.innerHTML="1";
    }
}
function tablaESTADOS(elemento, fila) {
    //alert("entra");
    let temporada = fila.insertCell();
    let capitulo = fila.insertCell();
    let estado = fila.insertCell();
    if (elemento.temporada) {
        temporada.innerHTML=elemento.temporada;
        capitulo.innerHTML=elemento.capitulo;
        estado.innerHTML=elemento.estado;
        
        
    }else{
        temporada.innerHTML="";
        capitulo.innerHTML="";
        estado.innerHTML="";
    }
}
function tablaOPINION(elemento, fila) {
    //alert("entra");
    let opinion = fila.insertCell();
    if (elemento.opinion) {
        opinion.innerHTML=elemento.opinion;
    }else{
        opinion.innerHTML="1";
    }
}
function celdaVacia(contenido, fila) {
    let vacio = fila.insertCell();
                
    vacio.innerHTML=contenido;
}


///////////////////////////////////////////////////////////////
function BuscarAnimeNombre(valores) {
    $("#noBorrar").nextAll("tr").remove();
    $.ajax({
        type:"POST",
        url:"PHP/PROB/ANIME/BuscarNombre.php",
        data:{nombre:valores[0]},
        dataType: "json",
        success:function(res){
            //alert(res);
            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tablaANIME(elemento, fila);
                tablaESTADOS(elemento, fila);
                tablaOPINION(elemento, fila);
            }  
        },
        error: function(res){
            alert(res);
        }
    });
}

function Listar() {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/PROB/ANIME/Listar.php",
        dataType: "json",
        success:function(res){

            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tablaANIME(elemento, fila);
                tablaESTADOS(elemento, fila);
            }  
        }
    });
}


