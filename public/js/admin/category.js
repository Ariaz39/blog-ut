const base_url = 'http://localhost:8000/api/admin/'

$(document).ready(function () {
    listAll();
});

$("#formCreateCategory").submit(function(e) {
    e.preventDefault()
    storeCategory()
});

$("#formUpdateCategory").submit(function(e) {
    e.preventDefault()
    updateCategory()
});


function listAll() {
    $.ajax({
        url: base_url + "category/list-all",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            $('table>tbody').html('')
            $.each(response, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.category_id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td><a class="btn-sm btn-warning text-decoration-none" onclick="showCategory(' + item.category_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>&nbsp;<a class="btn-sm btn-danger text-decoration-none" onclick="deleteCategory(' + item.category_id + ')">Borrar</a></td>' +
                    '</tr>';
                $('table>tbody').append(row);
            });
        }
    });
}

function storeCategory() {
    data = {
        'name': $('input:text[name="nameCategory"]').val()
    }

    $.ajax({
        url: base_url + 'category/store-category',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
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
        url: base_url + "category/show-category/" + id,
        type: "GET",
        success: function (response) {
            $("input[name='uCategoryId']").val(response.category_id);
            $("input[name='uNameCategory']").val(response.name);
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function updateCategory() {

    data = {
        'category_id': $('input:text[name="uCategoryId"]').val(),
        'name': $('input:text[name="uNameCategory"]').val(),
    }

    $.ajax({
        type: "PUT",
        url: base_url + 'category/update-category/' + data.category_id,
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

function deleteCategory(id) {
    $.ajax({
        url: base_url + "category/delete-category/" + id,
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
