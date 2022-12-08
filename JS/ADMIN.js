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
    $("#nombre").prop('disabled', false).attr("placeholder", "Nombre");
    $("#apellido").prop('disabled', false).attr("placeholder", "Apellido");
    $("#telefono").prop('disabled', false).attr("placeholder", "Telefono");
    $("#fechanac").prop('disabled', false);

    switch (select) {
        case "Subir":
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Borrar":
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Buscar":
            $("#btn").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Editar":
            $("#btn").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Listar":
            Listar([]);
            $("#btn").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Inicial":
            actualizarLista();

            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
            $("#opinon").prop('disabled', true);
        break;
        case "Contar":
            Contar([]);
            $("#btn").prop('disabled', true);
            $("#nombre").prop('disabled', true);
            $("#temporada").prop('disabled', true);
            $("#capitulo").prop('disabled', true);
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
    //alert("Ejecutado el SELECT");
    actualizarLista();
}
function btn() {
    let btn = $("#btn");
    let nombre = document.getElementById("nombre").value;
    let temporada = document.getElementById("temporada").value;
    let capitulo = document.getElementById("capitulo").value;
    let  = document.getElementById("").value;
    switch (btn.text()) {
        case "Subir":
            Subir([nombre]);
        break;
        case "Borrar":
            Borrar([nombre]);
        break;
        case "Buscar":
        break;
        case "Editar":
        break;
        case "Listar":
            Listar([]);
        break;
        case "Inicial":
        break;
        case "Contar":
        break;
        case "Nuevo Capitulo":
            Subir([nombre, temporada, capitulo, ]);
        break;
        case "Editar ":
            Editar([nombre, temporada, ]);
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
            $("#nombre").val(nombre.innerText);
            $("#temporada").val(temporada);
            $as= $("#select").val("Nuevo Capitulo");
            actualizarLista();
        });
        
    }else{
        nombre.innerHTML="";
    }
}

function tabla(elemento, fila){
    if ((elemento.temporada)&&(elemento.capitulo)&&(elemento.y)) {
        let temporada = fila.insertCell();
        temporada.innerHTML=elemento.temporada;
        //alert("funciona");
        let capitulo = fila.insertCell();
        capitulo.innerHTML=elemento.capitulo;
    
        let x = fila.insertCell();
        x.innerHTML=elemento.y;
    
    }else{
        let temporada = fila.insertCell();
        temporada.innerHTML="";
        //alert("funciona");
        let capitulo = fila.insertCell();
        capitulo.innerHTML="";
    
        let x = fila.insertCell();
        x.innerHTML="";
    }
    let celda5 = fila.insertCell();
        celda5.innerHTML="";
}

function celdaVacia(contenido, fila) {
    let vacio = fila.insertCell();
                
    vacio.innerHTML=contenido;
}
///////////////////////////////////////////////////////////////
function Borrar(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN//Borrar.php",
        data:{nombre:valores[0]},
        success:function(res){
            //alert(res);
            $("#nombre").val(($("#nombre").val().charAt(0)));
            actualizarLista();
            $("#nombre").val("");
        }
    });
}

function BuscarAll(valores) {
    $("#noBorrar").nextAll("tr").remove();
    $.ajax({
        type:"POST",
        url:"PHP/COMUN//BuscarAll.php",
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
                tabla(elemento, fila);
                tabla(elemento, fila);
            }
        }
    });
}

function BuscarNombre(valores) {
    $("#noBorrar").nextAll("tr").remove();
    //alert("Entrar al Buscar");
    $.ajax({
        type:"POST",
        url:"PHP/COMUN//BuscarNombre.php",
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
                tabla(elemento, fila);
                tabla(elemento, fila);
            }
        }
    });
}

function Contar(valores) {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN//Contar.php",
        dataType: "json",
        success:function(res){
            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
                //alert("entra");
                let fila = tabla.insertRow();
                celdaVacia(JSON.stringify(data), fila);
                tabla("", fila);
                tabla("", fila);
        }
    });
}

function Editar(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN/S/Editar.php",
        data:{nombre:valores[0],temporada:valores[1], x:valores[2]},
        success:function(res){
            actualizarLista()

            //alert(res);
            //valores[0] = valores[0].charAt(0);
            //ListarPorInicial([valores[0]]);
            //alert(res);
        }
    });
}

function ListarPorInicial(valores) {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN//Inicial.php",
        data:{inicial:valores[0]},
        dataType: "json",
        success:function(res){
            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tabla(elemento, fila);
                tabla(elemento, fila);
            } 
        }
    });

}

function Listar(valores) {
    $("#noBorrar").nextAll("tr").remove();

    $.ajax({
        type:"POST",
        url:"PHP/COMUN//Listar.php",
        dataType: "json",
        success:function(res){
            let data = JSON.stringify(res);
            data = JSON.parse(data);
            let tabla = document.getElementById("table");
            for (elemento of data) {
                let fila = tabla.insertRow();
                celdaVacia("", fila);

                tabla(elemento, fila);
                tabla(elemento, fila);
            }  
        }
    });
}

function Subir(valores) {
    $.ajax({
        type:"POST",
        url:"PHP/COMUN//Subir.php",
        data:{nombre:valores[0]},
        //dataType: "json",
        success:function(res){
            //alert(res);
            actualizarLista();
        }
    });
}

function Subir(valores) {

    $.ajax({
        type:"POST",
        url:"PHP/COMUN/S/Subir.php",
        data:{nombre:valores[0],temporada:valores[1],capitulo:valores[2], x:valores[3]},
        success:function(res){
            actualizarLista()

            //alert(res);
        }
    });
}
