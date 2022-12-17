window.addEventListener("load", main);


function main() {
    select();
    
    document.getElementById("ci")
        .addEventListener("keyup", actualizarLista);
    document.getElementById("selector")
        .addEventListener("change", selectAnime);
    document.getElementById("boton")
        .addEventListener("click", boton);
}
function actualizarLista() {
    let select = $("#selector").val();
    let nombre = document.getElementById("nombreANIME").value;
    
    switch (select) {
        case "Buscar":
            BuscarAnimeAll(["ANIME", nombre]);
        break;
        default:
            //alert("Ejecutado el Enlistar");
            Listar();
            break;
    }
}
function selectAnime() {
    let select = $("#selector").val();
    let btn = $("#boton");
    btn.text(select);

    $("#boton").prop('disabled', false);
    $("#nombreANIME").prop('disabled', false).attr("placeholder", "Nombre");
    $("#temporadaESTADO").prop('disabled', false).attr("placeholder", "Temporada");
    $("#capituloESTADO").prop('disabled', false).attr("placeholder", "Capitulo");
    $("#estadoESTADO").prop('disabled', false).attr("placeholder", "Estado");
    $("#opinon").prop('disabled', false).attr("placeholder", "Opinión");

    switch (select) {
        case "Subir":
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Borrar":
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Buscar":
            $("#boton").prop('disabled', true);
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Editar":
            $("#boton").prop('disabled', true);
            $("#nombreANIME").prop('disabled', true);
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Listar":
            ListarAnime(["Anime"]);
            $("#boton").prop('disabled', true);
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Inicial":
            actualizarLista();

            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Contar":
            ContarAnime(["Anime"]);
            $("#boton").prop('disabled', true);
            $("#nombreANIME").prop('disabled', true);
            $("#temporadaESTADO").prop('disabled', true);
            $("#capituloESTADO").prop('disabled', true);
            $("#estadoESTADO").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Editar Estado":
            $("#capituloESTADO").prop('disabled', true);
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
    let nombre = document.getElementById("nombreANIME").value;
    let temporada = document.getElementById("temporadaESTADO").value;
    let capitulo = document.getElementById("capituloESTADO").value;
    let estado = document.getElementById("estadoESTADO").value;
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
    if (elemento.asiento) {
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

function celdaVacia(contenido, fila) {
    let vacio = fila.insertCell();
                
    vacio.innerHTML=contenido;
}


///////////////////////////////////////////////////////////////

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
            }  
        }
    });
}

function BuscarAnimeNombre() {
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
            }  
        }
    });
}
