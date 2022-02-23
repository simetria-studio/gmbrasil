$(document).ready(function () {
    $('.cart').on('click', function () {
        $(".shopping-cart").animate({
            opacity: '1',
            width: '350px'
        });
    });
    $('.cart-close').on('click', function () {
        $(".shopping-cart").animate({
            opacity: '0',
            width: '0'
        })
    });
});


$('.navbar .dropdown-item').on('click', function (e) {
    var $el = $(this).children('.dropdown-toggle');
    var $parent = $el.offsetParent(".dropdown-menu");
    $(this).parent("li").toggleClass('open');

    if (!$parent.parent().hasClass('navbar-nav')) {
        if ($parent.hasClass('show')) {
            $parent.removeClass('show');
            $el.next().removeClass('show');
            $el.next().css({"top": -999, "left": -999});
        } else {
            $parent.parent().find('.show').removeClass('show');
            $parent.addClass('show');
            $el.next().addClass('show');
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }
        e.preventDefault();
        e.stopPropagation();
    }
});

$('.navbar .dropdown').on('hidden.bs.dropdown', function () {
    $(this).find('li.dropdown').removeClass('show open');
    $(this).find('ul.dropdown-menu').removeClass('show open');
});
