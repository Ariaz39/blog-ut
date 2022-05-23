const base_url = 'http://localhost:8000/api/admin/'

$(document).ready(function () {
    listAll();
});

$("#formCreateAutor").submit(function(e) {
    e.preventDefault()
    storeAutor()
});

$("#formUpdateAutor").submit(function(e) {
    e.preventDefault()
    updateAutor()
});

function listAll() {
    $.ajax({
        url: base_url + "autor/list-all",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            console.log(response)
            $('table>tbody').html('')
            $.each(response, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.autor_id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.email + '</td>' +
                    '<td>' + item.city + '</td>' +
                    '<td>' + item.semester + '</td>' +
                    '<td>' + item.program + '</td>' +
                    '<td>' +
                    '<a class="btn btn-sm btn-warning" onclick="showAutor(' + item.autor_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>' +
                    '&nbsp;' +
                    '<a class="btn btn-sm btn-danger" onclick="deleteAutor(' + item.autor_id + ')">Borrar</a>' +
                    '</td>' +
                    '</tr>';
                $('#list-all-authors>tbody').append(row);
            });
        }
    });
}

function storeAutor() {
    data = {
        'name': $('#nameAutor').val(),
        'lastname': $('#lastnameAutor').val(),
        'email': $('#emailAutor').val(),
        'city': $('#cityAutor').val(),
        'semester': $('#semesterAutor').val(),
        'program': $('#programAutor').val()
    }
    console.log(data)

    $.ajax({
        url: base_url + 'autor/store-autor',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            toastr.success(response.msg);
            $('.close').click();
            $('#formCreateAutor').trigger("reset");
            $('table>tbody').html('');
            listAll();
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function showAutor(id) {
    $.ajax({
        type: "GET",
        url: base_url + "autor/show-autor/" + id,
        success: function (response) {
            $("#uAutorId").val(response.autor_id);
            $("#uNameAutor").val(response.name);
            $("#uLastnameAutor").val(response.lastname);
            $("#uEmailAutor").val(response.email);
            $("#uCityAutor").val(response.city);
            $("#uProgramAutor").val(response.program);
            $("#uSemesterAutor").val(response.semester);
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function updateAutor() {

    data = {
        'autor_id': $('#uAutorId').val(),
        'name': $('#uNameAutor').val(),
        'lastname': $('#uLastnameAutor').val(),
        'email': $('#uEmailAutor').val(),
        'city': $('#uCityAutor').val(),
        'program': $('#uProgramAutor').val(),
        'semester': $('#uSemesterAutor').val()
    }

    $.ajax({
        type: "PUT",
        url: base_url + 'autor/update-autor/' + data.autor_id,
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            toastr.success(response.msg);
            $('.close').click();
            $('#formCreateCategory').trigger("reset");
            listAll();
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function deleteAutor(id) {
    $.ajax({
        url: base_url + "autor/delete-autor/" + id,
        type: "DELETE",
        data: {
            'autor_id': id
        },
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            toastr.error(response.msg);
            $('table>tbody').html('');
            listAll();
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

toastr.options = {
    // "closeButton": true,
    "newestOnTop": true,
    "progressBar": true,

}
