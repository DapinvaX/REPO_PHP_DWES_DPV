function guardar_bateria() {


    codigo = $("#codigo").val();
    marca = $("#marca").val();
    tipo = $("#tipo").val();
    capacidad = $("#capacidad").val();
    carga = $("#carga").val();
    estado = $("#estado").val();

    var valores = {
        "codigo": codigo,
        "marca": marca,
        "tipo": tipo,
        "capacidad": capacidad,
        "carga": carga,
        "estado": estado
    };



    $.ajax({

        url: "guardarBateria.php",
        type: 'POST',
        dataType: "html",
        data: valores,

        beforeSend: function() {

        },
        success: function(data, textStatus, xhr) {
            // $("#tabla_baterias").append(data);

            html = '<tr id="' + data + '">';

            html = html + '<td>' + data + '</td><td>' + codigo + '</td><td>' + '</td><td>' + marca + '</td><td>' + '</td><td>' + tipo + '</td><td>' + capacidad + '</td><td>' + carga + '</td><td>' + estado + '</td>';

            html = html + '<td><a href="index.php?operacion=editar&nume=' + data + '" class="btn btn-info" role="button">Modificar</a></td>';

            html = html + '<td><a href="index.php?operacion=borrar&nume=' + data + '" class="btn btn-danger" role="button">Eliminar</a></td>';

            html = html + '</tr>';

            $("#tabla_baterias").append(html);

        },

        error: function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
            alert(textStatus);
            alert(errorThrown);
            console.info(xhr.responseText);
        }

    });



    return false;

}


function modificar_bateria() {


    codigo = $("#codigo").val();
    marca = $("#marca").val();
    tipo = $("#tipo").val();
    capacidad = $("#capacidad").val();
    carga = $("#carga").val();
    estado = $("#estado").val();
    

    var valores = {
        "codigo": codigo,
        "marca": marca,
        "tipo": tipo,
        "capacidad": capacidad,
        "carga": carga,
        "estado": estado
    };




    $.ajax({

        url: "modificarBateria.php",
        type: 'POST',
        dataType: "html",
        data: valores,

        beforeSend: function() {

        },
        success: function(data, textStatus, xhr) {

            fila = '#' + id;
            $(fila).append(data);

        },

        error: function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
            alert(textStatus);
            alert(errorThrown);
            console.info(xhr.responseText);
        }

    });



    return false;

}