$(document).ready(function () {

    $('.btnAdd').on('click', function () {
        $.ajax({
            url: '/cartAdd/' + $(this).data('id'),
            type: 'get',
            success: function (data) {
                $('.shopping-list').empty();
                var valueTotal = 0;
                var count = 0;
                $.each(data, (key, value) => {
                    valueTotal += value.price;
                    count += value.quantity;
                    $('.shopping-list').append(`
                    <li>
                    <a href="#" class="remove" title="Remove this item"><i
                            class="fa fa-remove"></i></a>
                    <a class="cart-img" href="#"><img
                            src="storage/${value.attributes.image}" alt="#"></a>
                    <h4><a href="#">${value.name}</a></h4>
                    <p class="quantity">${value.quantity}x - <span class="amount">R$
                    ${value.price.toFixed(2).replace('.', ',')}</span>
                    </p>
                </li>
                    `);

                });
                $('.total-amount').html(valueTotal.toFixed(2).replace('.', ','));
                $('.count').html(count);
                $('.total-count').html(count);

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Produto adicionado no carrinho!',
                    showConfirmButton: false,
                    timer: 1500
                })

            }
        });
    });
    $('.remove').on('click', function () {
        $.ajax({
            url: '/cartRemove/' + $(this).data('id'),
            type: 'get',
            success: function (data) {
                $('.shopping-list').empty();
                var valueTotal = 0;
                var count = 0;
                $.each(data, (key, value) => {
                    valueTotal += value.price;
                    count += value.quantity;
                    $('.shopping-list').append(`
                    <li>
                    <a href="#" class="remove" title="Remove this item"><i
                            class="fa fa-remove"></i></a>
                    <a class="cart-img" href="#"><img
                            src="storage/${value.attributes.image}" alt="#"></a>
                    <h4><a href="#">${value.name}</a></h4>
                    <p class="quantity">${value.quantity}x - <span class="amount">R$
                    ${value.price.toFixed(2).replace('.', ',')}</span>
                    </p>
                </li>
                    `);

                });
                $('.total-amount').html(valueTotal.toFixed(2).replace('.', ','));
                $('.count').html(count);
                $('.total-count').html(count);

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Produto removido do carrinho!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });
    });


});
