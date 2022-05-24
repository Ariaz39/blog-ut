const base_url = 'http://localhost:8000/api/admin/'

$(document).ready(function () {
    listAll();
});

$("#formCreateBlog").submit(function(e) {
    e.preventDefault()
    storeBlog()
});

$("#formUpdateBlog").submit(function(e) {
    e.preventDefault()
    updateBlog()
});

function listAll() {
    $.ajax({
        url: base_url + "blog/list-all",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            $('table>tbody').html('')
            $.each(response, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.blog_id + '</td>' +
                    '<td>' + item.image + '</td>' +
                    '<td>' + item.title + '</td>' +
                    '<td>' + item.content + '</td>' +
                    '<td>' + item.autor_id + '</td>' +
                    '<td>' + item.category_id + '</td>' +
                    '<td>' + item.created_at + '</td>' +
                    '<td>' +
                    '<a class="btn btn-sm btn-warning" onclick="showBlog(' + item.blog_id + ')" data-toggle="modal" data-target=".modal-update">Editar</a>' +
                    '&nbsp;' +
                    '<a class="btn btn-sm btn-danger" onclick="deleteBlog(' + item.blog_id + ')">Borrar</a>' +
                    '</td>' +
                    '</tr>';
                $('#list-all>tbody').append(row);
            });
        }
    });
}

function storeBlog() {
    data = {
        'image': $('#imageBlog').val(),
        'title': $('#titleBlog').val(),
        'content': $('#contentBlog').val(),
        'autor': $('#autorBlog').val(),
        'category': $('#categoryBlog').val(),
    }
    console.log(data)

    $.ajax({
        url: base_url + 'blog/store-blog',
        type: 'POST',
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            toastr.success(response.msg);
            $('.close').click();
            $('#formCreateBlog').trigger("reset");
            $('table>tbody').html('');
            listAll();
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function showBlog(id) {
    $.ajax({
        type: "GET",
        url: base_url + "blog/show-blog/" + id,
        success: function (response) {
            $("#uBlogId").val(response.blog_id);
            $("#uImageBlog").val(response.name);
            $("#uTitleBlog").val(response.lastname);
            $("#uContentBlog").val(response.email);
            $("#uAutorBlog").val(response.city);
            $("#uCategoryBlog").val(response.program);
        },
        error: function (response) {
            var err = response.responseJSON;
            toastr.error(err.msg, 'valio verga');
        }
    });
}

function updateBlog() {

    data = {
        'blog_id': $('#uBlogId').val(),
        'image': $('#imageBlog').val(),
        'title': $('#titleBlog').val(),
        'content': $('#contentBlog').val(),
        'autor': $('#autorBlog').val(),
        'category': $('#categoryBlog').val(),
    }

    $.ajax({
        type: "PUT",
        url: base_url + 'blog/update-blog/' + data.blog_id,
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

function deleteBlog(id) {
    $.ajax({
        url: base_url + "blog/delete-blog/" + id,
        type: "DELETE",
        data: {
            'blog_id': id
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
