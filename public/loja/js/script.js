$(document).ready(function () {
    $('.cart-btn').on('click', function () {
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
                    total += (value.price * value.quantity);
                    $('.mini-shopping-cart').append(`<div id="cart-itens-${key}" class="mini-cart-item">
                <div>
                    <img
                        src="storage/${value.attributes.image} ">
                </div>
                <div>
                    <span>${value.name}<br></span>
                    <span>Código: ${value.attributes.code}<br>Quantidade: ${value.quantity}</span>
                </div>
                <div>
                    <span>${value.price.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })}<br></span>
                   <i class="fa fa-trash-o" id="removeItem-${key}"></i>
                </div>
            </div>`);

                    $(`#removeItem-${key}`).on('click', function () {
                        total = parseFloat(total) - (parseFloat(value.price) * parseInt(value.quantity));
                        console.log(total);
                        $.ajax({
                            url: `cartRemove/${key}`,
                            async: true,
                            success: function (data) {
                                console.log('removido');
                                $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
                            },
                            beforeSend: function () {
                                $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
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

    var total = 0;
    $.ajax({
        url: "cart/get",
        async: true,
        success: function (data) {
            console.log(data)
            $('.mini-shopping-cart').empty();
            $.each(data, (key, value) => {
                total += (value.price * value.quantity);
                $('.mini-shopping-cart').append(`<div id="cart-itens-${key}" class="mini-cart-item">
                <div>
                    <img
                        src="storage/${value.attributes.image} ">
                </div>
                <div>
                    <span>${value.name}<br></span>
                    <span>Código: ${value.attributes.code}<br>Quantidade: ${value.quantity}</span>
                </div>
                <div>
                    <span>${value.price.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })}<br></span>
                   <i class="fa fa-trash-o" id="removeItem-${key}"></i>
                </div>
            </div>`);

                $(`#removeItem-${key}`).on('click', function () {
                    total = parseFloat(total) - (parseFloat(value.price) * parseInt(value.quantity));
                    $.ajax({
                        url: `cartRemove/${key}`,
                        async: true,
                        success: function (data) {
                            console.log('removido');
                            $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
                        },
                        beforeSend: function () {
                            $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
                            $(`#cart-itens-${key}`).remove();
                            $(`#iten-cart-${key}`).remove();
                        },
                    });
                });
            });
        },
        beforeSend: function (data) {

        },
    }).done(function () {
        $('.price-span').text(total.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
    });



    //cart 2
    var total2 = 0;
    $.ajax({
        url: "cart/get",
        async: true,
        success: function (data) {
            console.log(data)
            $('.cartWrap').empty();
            $.each(data, (key, value) => {
                total2 += (value.price * value.quantity);
                $('.cartWrap').append(`<li id="iten-cart-${key}" class="items odd">
                <div class="infoWrap">
                    <div class="cartSection">
                        <img src="storage/${value.attributes.image} " alt=""
                            class="itemImg" />
                        <p class="itemNumber">Código: ${value.attributes.code}</p>
                        <h3>${value.name}</h3>

                        <p> <input type="text" data-id="${value.id}" class="qty"  placeholder="${value.quantity}" /> ${value.price.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })}</p>

                    </div>


                    <div class="prodTotal cartSection">
                        <p class="priceP-${value.id}">${(value.price * value.quantity).toLocaleString("pt-BR", { style: "currency", currency: "BRL" })} </p>
                    </div>
                    <div class="cartSection removeWrap">
                        <a id="removeitenCart-${key}" class="remove">x</a>
                    </div>
                </div>
            </li>`);
                $(document).on('blur', '.qty', function () {
                    var value = $(this).val();
                    var id = $(this).data('id');
                    $.ajax({
                        type: 'post',
                        url: `cart/update/${id}`,
                        async: true,
                        data: { value },
                        success: function (data) {
                            console.log(data[key]);
                            $(`.priceP-${data[key].id}`).html(`${(data[key].price * data[key].quantity).toLocaleString("pt-BR", { style: "currency", currency: "BRL" })}`);
                        },
                        beforeSend: function () {
                            $(`.priceP-${key}`).html(`<div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>`);
                        },
                    });

                });
                $(`#removeitenCart-${key}`).on('click', function () {
                    total2 = parseFloat(total2) - (parseFloat(value.price) * parseInt(value.quantity));
                    console.log('clicado')
                    $.ajax({
                        url: `cartRemove/${key}`,
                        async: true,
                        success: function (data) {
                            console.log('removido');
                            $('.value').text(total2.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
                        },
                        beforeSend: function () {
                            $('.value').text(total2.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
                            $(`#iten-cart-${key}`).remove();
                            $(`#cart-itens-${key}`).remove();
                        },
                    });
                });
            });
        },
        beforeSend: function () {
            // $('.preloader_container').removeClass('d-none');
        },
    }).done(function () {
        $('.value').text(total2.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));
        $('.preloader_container').addClass('d-none');
    });

    // Remove Items From Cart
    $('a.remove').click(function () {
        event.preventDefault();
        $(this).parent().parent().parent().hide(400);

    })

    // Just for testing, show all items
    $('a.btn.continue').click(function () {
        $('li.items').show(400);
    });




});



$('.responsive').slick({
    dots: true,
    infinite: true,
    arrows: true,
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


$('.radio').on('click', function () {

    var method = $(this).val();

    if (method == 'boleto') {
        $('#boleto').removeClass('d-none');
        $('#card').addClass('d-none');
    }
    if (method == 'card') {
        $('#card').removeClass('d-none');
        $('#boleto').addClass('d-none');
    }

});
