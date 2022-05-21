$(document).ready(function() {
    listAll();
});

function listAll() {
    $('#list-all').DataTable({
        language: {
            'url' : '//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
        }
    });

    $.ajax({
        url: "http://localhost:8000/api/admin/autor/listar",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        data: {
            nombre: 'name',
            nombre: 'lastname',
            nombre: 'city'
        },
        success: function (response) {
            var autors = response
            $('table>tbody').html('') //Esta linea borra el mensaje de que no existen registros
            console.log(autors)
            $.each(autors, function (i, item) {
                var row = '<tr>' +
                    '<td>' + item.autor_id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.email + '</td>' +
                    '<td>' + item.city + '</td>' +
                    '<td>' + item.semester + '</td>' +
                    '<td>' + item.program + '</td>' +
                    '<td><a class="btn-sm btn-warning text-decoration-none" onclick="showBodypart(' + item.bodypart_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>&nbsp;<a class="btn-sm btn-danger text-decoration-none" onclick="deleteBodypart(' + item.bodypart_id + ')">Borrar</a></td>' +
                    '</tr>';
                $('table>tbody').append(row);
            });
        }
    });
}
