$(document).ready(function () {
    listAll();
});

function listAll() {
    $.ajax({
        url: "http://localhost:8000/api/admin/category/list-all",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            $.each(response, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.category_id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.email + '</td>' +
                    '<td>' + item.city + '</td>' +
                    '<td>' + item.semester + '</td>' +
                    '<td>' + item.program + '</td>' +
                    '<td><a class="btn-sm btn-warning text-decoration-none" onclick="showCategory(' + item.category_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>&nbsp;<a class="btn-sm btn-danger text-decoration-none" onclick="deleteCategory(' + item.category_id + ')">Borrar</a></td>' +
                    '</tr>';
                $('table>tbody').append(row);
            });
        }
    });
}

function storeCategory() {
    data = {
        'name': $('input:required|text[name="nameCategory"]').val(),
        'lastname': $('input:required|text[name="lastnameCategory"]').val(),
        'email': $('input:required|text[name="emailCategory"]').val(),
        'city': $('input:required|text[name="cityCategory"]').val(),
        'semester': $('input:required|text[name="semesterCategory"]').val(),
        'program': $('input:required|text[name="programCategory"]').val()
    }

    $.ajax({
        url: 'http://localhost:8000/api/admin/category/store-category',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            // alert(response.msg);
            toastr.success(response.msg);
            $('.close').click();
            $('#formCreateCategory').trigger("reset");
            $('table>tbody').html('');
            listAll();
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function showCategory(id) {
    $.ajax({
        type: "GET",
        url: "http://localhost:8000/api/admin/category/show-category/" + id,
        success: function (response) {
            data = response.data;
            $("input[name='uCategoryId']").val(data.category_id);
            $("input[name='uNameCategory']").val(data.name);
            $("input[name='uLastnameCategory']").val(data.lastname);
            $("input[name='uEmailCategory']").val(data.email);
            $("input[name='uCityCategory']").val(data.city);
            $("input[name='uProgramCategory']").val(data.program);
            $("input[name='uSemesterCategory']").val(data.semester);
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function updateCategory() {

    data = {
        'category_id': $('input:required|text[name="uCategoryId"]').val(),
        'name': $('input:required|text[name="uNameCategory"]').val(),
        'lastname': $('input:required|text[name="uLastnameCategory"]').val(),
        'email': $('input:required|text[name="uEmailCategory"]').val(),
        'city': $('input:required|text[name="uCityCategory"]').val(),
        'program': $('input:required|text[name="uProgramCategory"]').val(),
        'semester': $('input:required|text[name="uSemesterCategory"]').val()
    }

    $.ajax({
        type: "PUT",
        url: 'http://localhost:8000/api/admin/category/update-category' + data.category_id,
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

function deleteCategory(id) {
    $.ajax({
        url: "http://localhost:8000/api/admin/category/delete-category/" + id,
        type: "DELETE",
        data: {
            'category_id': id
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
