$(document).ready(function () {
    $('.menu, .overlay').on('click',function () {
        $('.menu').toggleClass('clicked');
        $('#nav').toggleClass('show');
    });
    $('#filtres button').on('click', function () {
        value = $(this).data('filter');
        $('#filtres button').removeClass('active'),
            $(this).addClass('active');
        $('#elements section').each(function () {
            el = $(this);
            el.show();
            if (!el.hasClass(value) && value != "all")
                el.hide();
        });
    });
})
