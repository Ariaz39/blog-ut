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
            let data = response.data
            $('table>tbody').html('')
            $.each(data, function (i, item) {
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
                $('table>tbody').append(row);
            });
        }
    });
}

function storeAutor() {
    data = {
        'name': $('input:text[name="nameAutor"]').val(),
        'lastname': $('input:text[name="lastnameAutor"]').val(),
        'email': $('input:text[name="emailAutor"]').val(),
        'city': $('input:text[name="cityAutor"]').val(),
        'semester': $('input:text[name="semesterAutor"]').val(),
        'program': $('input:text[name="programAutor"]').val()
    }

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
            let data = response.data
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
        'autor_id': $('input:text[name="uAutorId"]').val(),
        'name': $('input:text[name="uNameAutor"]').val(),
        'lastname': $('input:text[name="uLastnameAutor"]').val(),
        'email': $('input:text[name="uEmailAutor"]').val(),
        'city': $('input:text[name="uCityAutor"]').val(),
        'program': $('input:text[name="uProgramAutor"]').val(),
        'semester': $('input:text[name="uSemesterAutor"]').val()
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
