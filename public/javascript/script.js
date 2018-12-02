$(document).ready(function () {

    // $('#sidebarCollapse').on('click', function () {
    //     $('#sidebar').toggleClass('active');
    // });

    // $('.carousel').carousel({
    //     interval: 20
    //   })

    // scroll fade color
    $(window).scroll(function () {
        $(".fade").css("opacity", 1 - $(window).scrollTop() / 650);
        $(".first-view").css("opacity", 1 - $(window).scrollTop() / 650);
    });

});