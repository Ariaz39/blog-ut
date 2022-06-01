const base_url = 'http://localhost:8000/api/front/'

$(document).ready(function () {
    listAllCategories();
    listAllAutors();
    listAllBlogs();
    listLastBlogs();
});

function listAllCategories() {
    $.ajax({
        url: base_url + "list-last-categories",
        contentType: 'application/json',
        type: "GET",
        dataType: 'json',
        success: response => {
            let data = response.data
            $.each(data, (i, item) => {
                let row = '<li><a href="#">' + item.name + '</a></li>';
                $('#list_categories, #list_categories_int').append(row);
            });
        }
    });
}

function listAllAutors() {
    $.ajax({
        url: base_url + "list-last-autors",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: response => {
            let data = response.data
            $.each(data, (i, item) => {
                let row = '<li><a href="#">' + item.name + ' ' + item.lastname + '</a></li>';
                $('#list_autors').append(row);
            });
        }
    });
}

function listAllBlogs() {
    $.ajax({
        "url": base_url + "list-all-blogs",
        "type": "GET",
        "contentType": 'application/json',
        "dataType": 'json',
        "success": response => {
            let data = response.data
            $.each(data, (i, item) => {
                let row = '<div class="entry-media">' +
                    '<img src="' + item.image + '" alt>' +
                    '<button>' + item.category_name+ '</button>' +
                    '</div>' +
                    '<div class="entry-details">' +
                    '<div class="author">Creado por: <a href="">' + item.autor_name + ' ' + item.autor_lastname + '</a></div>' +
                    '<h3><a href=""> ' + item.title + '</a></h3>' +
                    '<div class="entry-meta">' +
                    '<ul>' +
                    '<li><a href="">5 Mins Read</a></li>' +
                    '<li><a href="">' + item.created_at + '</a></li>' +
                    '</ul>' +
                    '</div>' +
                    '<p>' + item.content.substring(0, 150) + '...' + '</p>' +
                    '<a href="" class="read-more">Leer mas <i class="fi ti-angle-right"></i></a>' +
                    '</div>';
                $('#blog_content').append(row);
            });
        }
    });
}

function listLastBlogs() {
    $.ajax({
        url: base_url + "list-last-blogs",
        type: "GET",
        contentType: 'application/json',
        dataType: 'json',
        success: response => {
            let data = response.data
            $.each(data, (i, item) => {
                let row = '<div class="post">' +
                    '<div class="img-holder">' +
                    '<img src="assets/images/recent-posts/img-1.jpg" alt>' +
                    '</div>' +
                    '<div class="details">' +
                    '<span class="date"> ' + item.created_at + '</span>' +
                    '<h4><a href="">' + item.title + '</a></h4>' +
                    '</div>' +
                    '</div>';
                $('#list_blog_recents').append(row);
            });
        }
    });
}
