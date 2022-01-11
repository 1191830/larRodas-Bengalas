$(function () {
    $('.sidebar-menu .sub a').click(function (e) {
        e.preventDefault();

        var link = $(this).attr('href');

        $.ajax({
            type: "GET",
            url: link,
            async: false, //transformer
        }).then(function (data) {
            var mainDiv = $("#main-content", data);
            $('#main-content').remove();
            $('#container').append(mainDiv);
            window.history.replaceState(data, "", link);
            location.reload();
        });
    });
    
    $('.sidebar-menu .active').removeClass('active');
    $(`.sidebar-menu .sub a[href="${window.location.pathname}"]`).parents('ul').css("display", "block");
    $(`.sidebar-menu .sub a[href="${window.location.pathname}"]`).addClass('active')
     
    // do something after content has been loaded
});

