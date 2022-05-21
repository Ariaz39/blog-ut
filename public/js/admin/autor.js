$(document).ready(function () {
    listAll();
});

function listAll() {
    $.ajax({
        url: "http://localhost:8000/api/admin/autor/list-all",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            $.each(response, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.autor_id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.email + '</td>' +
                    '<td>' + item.city + '</td>' +
                    '<td>' + item.semester + '</td>' +
                    '<td>' + item.program + '</td>' +
                    '<td><a class="btn-sm btn-warning text-decoration-none" onclick="showAutor(' + item.autor_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>&nbsp;<a class="btn-sm btn-danger text-decoration-none" onclick="deleteAutor(' + item.autor_id + ')">Borrar</a></td>' +
                    '</tr>';
                $('table>tbody').append(row);
            });
        }
    });
}

function storeAutor() {
    data = {
        'name': $('input:required|text[name="nameAutor"]').val(),
        'lastname': $('input:required|text[name="lastnameAutor"]').val(),
        'email': $('input:required|text[name="emailAutor"]').val(),
        'city': $('input:required|text[name="cityAutor"]').val(),
        'semester': $('input:required|text[name="semesterAutor"]').val(),
        'program': $('input:required|text[name="programAutor"]').val()
    }

    $.ajax({
        url: 'http://localhost:8000/api/admin/autor/store-autor',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            // alert(response.msg);
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
        url: "http://localhost:8000/api/admin/autor/show-autor/" + id,
        success: function (response) {
            data = response.data;
            $("input[name='uAutorId']").val(data.autor_id);
            $("input[name='uNameAutor']").val(data.name);
            $("input[name='uLastnameAutor']").val(data.lastname);
            $("input[name='uEmailAutor']").val(data.email);
            $("input[name='uCityAutor']").val(data.city);
            $("input[name='uProgramAutor']").val(data.program);
            $("input[name='uSemesterAutor']").val(data.semester);
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function updateAutor() {

    data = {
        'autor_id': $('input:required|text[name="uAutorId"]').val(),
        'name': $('input:required|text[name="uNameAutor"]').val(),
        'lastname': $('input:required|text[name="uLastnameAutor"]').val(),
        'email': $('input:required|text[name="uEmailAutor"]').val(),
        'city': $('input:required|text[name="uCityAutor"]').val(),
        'program': $('input:required|text[name="uProgramAutor"]').val(),
        'semester': $('input:required|text[name="uSemesterAutor"]').val()
    }

    $.ajax({
        type: "PUT",
        url: 'http://localhost:8000/api/admin/autor/update-autor' + data.autor_id,
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            // alert(response.msg);
            toastr.success(response.msg);
            $('.close').click();
            $('table>tbody').html('');
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
        url: "http://localhost:8000/api/admin/autor/delete-autor/" + id,
        type: "DELETE",
        data: {
            'autor_id': id
        },
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            // alert(response.msg)
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
