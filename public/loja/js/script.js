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

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({ "top": -999, "left": -999 });
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

    $('.btn-cart').on('click', function () {
        var dados = $(this).data('cart');
        var btn = $(this).data('id');
        // console.log(btn);
        var total = 0;
        $.ajax({
            type: 'post',
            url: 'cartAdd',
            async: true,
            data: JSON.stringify(dados),
            contentType: "application/json; charset=utf-8",
            traditional: true,
            beforeSend: function () {

                $(`.btn-${btn}`).html(`<div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>`);
            },
            success: function (data) {
                console.log(data)
                $(".shopping-cart").animate({
                    opacity: '1',
                    width: '350px'
                });
                $('.mini-shopping-cart').empty();
                $.each(data, (key, value) => {
                    total += value.price * value.quantity;
                    $('.mini-shopping-cart').append(`<div id="cart-itens-${key}" class="mini-cart-item">
                <div>
                    <img
                        src="storage/${value.attributes.image} ">
                </div>
                <div>
                    <span>${value.name}<br></span>
                    <span>Código: 103530<br>Quantidade: ${value.quantity}</span>
                </div>
                <div>
                    <span>${value.price.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })}<br></span>
                   <i class="fa fa-trash-o" id="removeItem-${key}"></i>
                </div>
            </div>`);

                    $(`#removeItem-${key}`).on('click', function () {
                        total - value.price * value.quantity;
                        $.ajax({
                            url: `cartRemove/${key}`,
                            async: true,
                            success: function (data) {
                                console.log('removido');

                            },
                            beforeSend: function () {

                                $(`#cart-itens-${key}`).remove();
                            },
                        });
                    });
                });

            },


        }).done(function (msg) {
            $(".btn-cart").html("ADICIONAR");
            $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
        });


    });
    var removeBtn = $('#removeItem').data('remove');
    $(`.remove-${removeBtn}`).on('click', function () {
        console.log('clicado')
        $.ajax({
            url: `cartRemove/${removeBtn}`,
            async: true,
            success: function (data) {
                console.log('removido');
            },
            beforeSend: function () {
                $(`#cart-itens-${removeBtn}`).remove();
            },
        }).done(function () {

        });
    });

});




$('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
