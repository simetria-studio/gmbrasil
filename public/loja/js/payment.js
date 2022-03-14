let hash;
let installment;


PagSeguroDirectPayment.onSenderHashReady(function (response) {
    if (response.status == 'error') {
        console.log(response.message);
        return false;
    }
    hash = response.senderHash; //Hash estará disponível nesta variável.
});


PagSeguroDirectPayment.getInstallments({
    amount: total,
    maxInstallmentNoInterest: 3,
    brand: 'visa',
    success: function (response) {
        console.log(response)
        $.each(response.installments, function (i, obj) {
            $.each(obj, function (i2, obj2) {
                var NumberValue = obj2.installmentAmount;
                var Number = "R$ " + NumberValue.toFixed(2).replace(".", ",");
                var NumberParcelas = NumberValue.toFixed(2);
                $('#parcelas').show().append(`<option value='${obj2.quantity}' data-number="${NumberParcelas}">${obj2.quantity} parcelas de ${Number}</option>`);
            });
        });
    },
    error: function (response) {
        console.log(response)
    },
    complete: function (response) {
        // Callback para todas chamadas.
    }
});

$("#parcelas").on('change', function () {
    $('#ValorParcelas').val($(this).find('option:selected').data('number'));
});

$('.subCard').on('click', function () {
    let token;
    var dados = []
    PagSeguroDirectPayment.createCardToken({
        cardNumber: $('[name="number"]').val(), // Número do cartão de crédito
        brand: 'visa', // Bandeira do cartão
        cvv: $('[name="cvv"]').val(),
        expirationMonth: $('[name="mounth"]').val(),
        expirationYear: $('[name="year"]').val(),
        success: function (response) {
            token = response.card.token;
            // console.log(token);
            $.ajax({
                url: 'checkout/finalizar',
                type: 'post',
                data: {
                    hash,
                    token,
                    cardNumber: $('[name="number"]').val(),
                    cvv: $('[name="cvv"]').val(),
                    expirationMonth: $('[name="mounth"]').val(),
                    installment: $('[name="parcela"]').val(),
                    valor: $('[name="valor"]').val(),
                    expirationYear: $('[name="year"]').val(),
                },
                beforeSend: function () {
                    $('#btncard').html(`<div class="spinner-border" role="status">
                    <span class="sr-only">Enviado...</span>
                  </div>`);
                },
                success: function (response) {
                    console.log(response)
                    $('#btncard').html("FINALIZAR");
                    Swal.fire({
                        icon: 'success',
                        title: 'Tudo certo...',
                        text: 'Compra aceita!',

                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "/pedidos"
                        }
                    });
                },
                error: function (response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Verifique suas informações e tente novamente!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.location.reload(true);
                        }
                    });
                }

            });
        },
        error: function (response) {
            console.log(response)
            $('#btncard').html("FINALIZAR");
            if (response.errors[10001]) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Coloque um numero de cartão valido!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.location.reload(true);
                    }
                });
            }
            if (response.errors[10002]) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Selecione a data correta!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.location.reload(true);
                    }
                });
            }
            if (response.errors[10004]) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Cvv é obrigatório!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // document.location.reload(true);
                    }
                });
            }
            if (response.errors[30404]) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Recarregue a pagina e tente novamente!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.reload(true);
                    }
                });
            }


        }
    });



});


$('.btnBoleto').on('click', function () {
    let token;
    // console.log(token);
    $.ajax({
        url: 'checkout/boleto',
        type: 'post',
        data: {
            hash,
            token,
            cardNumber: $('[name="number"]').val(),
            cvv: $('[name="cvv"]').val(),
            expirationMonth: $('[name="mounth"]').val(),
            installment: $('[name="parcela"]').val(),
            valor: $('[name="valor"]').val(),
            expirationYear: $('[name="year"]').val(),
        },
        beforeSend: function () {
            $('#btnboleto').html(`<div class="spinner-border" role="status">
            <span class="sr-only">Enviado...</span>
          </div>`);
        },
        success: function (response) {
            console.log(response)
            $('#btnboleto').html("FINALIZAR");
            Swal.fire({
                icon: 'success',
                title: 'Tudo certo...',
                text: 'Compra aceita!',

            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/pedidos"
                }
            });
        },
        error: function (response) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Verifique suas informações e tente novamente!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.reload(true);
                }
            });
        }
    });
});


