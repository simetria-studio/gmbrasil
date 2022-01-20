$.fn.materializeInputs = function (selectors) {
    // default param with backwards compatibility
    if (typeof selectors === "undefined") selectors = "input, textarea, select";

    // attribute function
    function setInputValueAttr(element) {
        element.setAttribute("value", element.value);
    }

    // set value attribute at load
    this.find(selectors).each(function () {
        setInputValueAttr(this);
    });

    // on keyup and change
    this.on("keyup change", selectors, function () {
        setInputValueAttr(this);
    });
};

/**
 * Material Inputs
 */
$("body").materializeInputs();

$('[name="cpf"]').mask("000.000.000-00");
$('[name="telefone"]').mask("(99) 9999-9999");
$('[name="whatsapp"]').mask("(99) 99999-9999");
$('[name="cpf_responsavel"]').mask("000.000.000-00");
$('[name="rg"]').mask("99.999.999-9");
$(document).ready(function () {
    $("#form-login")
        .find("input")
        .on("keyup", function (e) {
            if (e.keyCode == 13) {
                $("#btn-login").trigger("click");
            }
        });

    $(document).on("click", "#btn-login", function () {
        var btn = $(this);
        var form = $("#form-login").serialize();
        var url = $("#form-login").attr("action");
        btn.html('<div class="spinner-border text-light" role="status"></div>');
        btn.prop("disabled", true);
        $("#form-login").find("input").prop("disabled", true);

        $.ajax({
            url: url,
            type: "POST",
            data: form,
            success: (data) => {
                // console.log(data);

                window.location.href = data;
            },
            error: (err) => {
                // console.log(err);
                btn.html("ENTRAR");
                btn.prop("disabled", false);
                $("#form-login").find("input").prop("disabled", false);

                Swal.fire({
                    icon: "error",
                    title: "Email ou Senha invalidos",
                });
            },
        });
    });
});

$(document).on("click", "#img-hover", function () {
    $("#drop-menu").toggleClass("d-none");
});
