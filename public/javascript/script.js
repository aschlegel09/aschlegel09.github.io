$(document).ready(function () {
    // scroll fade color
    $(window).scroll(function () {
        $(".fade").css("opacity", 1 - $(window).scrollTop() / 650);
        $(".first-view").css("opacity", 1 - $(window).scrollTop() / 650);
    });

    $("#optionBtn").click(function() {
        $("#title").animate({
            height: "220px",
            fontSize: "80px"
        }, 5000, function(){
            console.log("font size changed");
        });
        $("#role").animate({
            opacity: "toggle",
            height: ["toggle", "swing"]
        }, 5000, "linear", function() {
            console.log("animation complete");
        }).then
        $("#optionBtn").animate({
            opacity: 0
        })
    });

    $("#toTop").click(function() {
        $("body").scrollTop(0);
        event.preventDefault;
    });
    $("#submit").click(function() {
        event.preventDefault;
    });
});