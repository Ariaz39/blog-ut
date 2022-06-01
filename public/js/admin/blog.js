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
            console.log(response)
            $('table>tbody').html('')
            let data = response.data
            $.each(data, function (i, item) {
                const row = '<tr>' +
                    '<td>' + item.blog_id + '</td>' +
                    '<td><img src="' + item.image + '" alt="Imagen"></td>' +
                    '<td>' + item.title + '</td>' +
                    '<td>' + item.content.substring(0, 60) + '</td>' +
                    '<td>' + item.autor_name + ' ' + item.autor_lastname + '</td>' +
                    '<td>' + item.category_name + '</td>' +
                    '<td>' + item.created_at + '</td>' +
                    '<td>' +
                    '<btn class="btn btn-sm btn-warning" onclick="showBlog(' + item.blog_id + ')" data-toggle="modal" data-target=".modal-update">Editar</btn>' +
                    '&nbsp;' +
                    '<btn class="btn btn-sm btn-danger" onclick="deleteBlog(' + item.blog_id + ')">Borrar</btn>' +
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
            toastr.success(response.message);
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
            let data = response.data
            $("#uBlogId").val(data.blog_id);
            $("#uCategoryBlog").val(data.category_id);

            $("#uTitleBlog").val(data.title);
            //$("#uImageBlog").val(data.image);
            $("#uContentBlog").val(data.content);
            $("#uAutorBlog").val(data.autor_id);

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
        'image': $('#uImageBlog').val(),
        'title': $('#uTitleBlog').val(),
        'content': $('#uContentBlog').val(),
        'autor_id': $('#uAutorBlog').val(),
        'category_id': $('#uCategoryBlog').val(),
    }
    console.log(data)

    $.ajax({
        type: "PUT",
        url: base_url + 'blog/update-blog/' + data.blog_id,
        data: JSON.stringify(data),
        contentType: 'application/json',
        dataType: 'json',
        success: function (response) {
            toastr.success(response.message);
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
            toastr.error(response.message);
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
