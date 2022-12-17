window.addEventListener("load", main);


function main() {
    select();
    
    document.getElementById("ci")
        .addEventListener("keyup", actualizarLista);
<<<<<<< HEAD
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
=======
    document.getElementById("select")
        .addEventListener("change", select);
    document.getElementById("btn")
        .addEventListener("click", btn);
}
function actualizarLista() {
    let select = $("#select").val();
    //let nombre = document.getElementById("nombre").value;
    
    switch (select) {
>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
        default:
            //alert("Ejecutado el Enlistar");
            Listar();
            break;
    }
}
<<<<<<< HEAD
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
    
=======
function select() {
    let select = $("#select").val();
    let btn = $("#btn");
    btn.text(select);

    switch (select) {

>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
        default:
            break;
    }
    actualizarLista();
}
<<<<<<< HEAD
function boton() {
    let btn = $("#boton");
    let nombre = document.getElementById("nombreANIME").value;
    let temporada = document.getElementById("temporadaESTADO").value;
    let capitulo = document.getElementById("capituloESTADO").value;
    let estado = document.getElementById("estadoESTADO").value;
=======
function btn() {
    let btn = $("#btn");
    let asiento = $("#asiento").val();
    let ci = $("#ci").val();
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let email = $("#email").val();
>>>>>>> 9f4ce554dc0800e553d7918b9bad5746f2335d54
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
<<<<<<< HEAD
            alert(res);
=======
>>>>>>> origin/Prueba-para-el-profe
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