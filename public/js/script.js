

$(function(){
    var btn = $('#gotoTop');
    btn.hide();

    var menu = $('#menu');
    menu.hide();

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
        btn.show();
        menu.slideDown(100);

        } else {
        btn.hide();
        menu.slideUp(100);
        
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    $("#upload").on("change", function () {
        $("#file").val(this.files[0].name);
    });
});

