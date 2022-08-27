(function ($) {
    //$('#cpf').inputmask("999.999.999-99");

    var idCustomer = 1000;

    tinymce.init({
        selector: 'textarea',
        height: 350,
        menubar: true,
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });

    $('#value_lawsuit').maskMoney({thousands:'.', decimal:','});

    $("#findCustomer").on("click", function(e) {
        e.preventDefault();

        if(!$("#cpf").val()) {
            $('#notFound').html("Informe um CPF");
            return;
        }

        $('#notFound').html("");

        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
        });
        jQuery.ajax({
            url: "/admin/clientes/cpf/" + $("#cpf").val(),
            method: 'get',
            beforeSend: function () {
                $('#loader').show();
            },
            success: function(result) {
                let value = result.cpf + ' - ' + result.name;

                $('#customers').append(
                    '<div class="input-group customers-' + idCustomer + '">' +
                        '<input type="text" name="customers[' + idCustomer + ']" class="form-control" value="' + value + '" readonly />' +
                        '<span class="input-group-btn">' +
                            '<a type="button" class="btn btn-danger" onclick="removeCustomer(' + idCustomer + ')">Remover</a>' +
                        '</span>' +
                    '</div>'
                );

                idCustomer += 1;
                $("#cpf").val("");
            },
            error: function (request) {
                let err = JSON.parse(request.responseText);
                $("#cpf").val("");
                $('#notFound').html(err.message);
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });

    $("#buildPDF").on("click", function(e) {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/processos/" + $("#id-lawsuit").val() + "/pdf",
            method: 'get',
            cache: false,
            contentType: false,
            processData: false,
            xhrFields: {
                responseType: 'blob'
            },
            beforeSend: function () {
                $('#loader').show();
            },
            success: function(result) {
                let link=document.createElement('a');
                link.href=window.URL.createObjectURL(result);
                link.download="PROCESSO_" + $("#id-lawsuit").val() + ".pdf";
                link.click();
            },
            error: function (request) {
                console.log("Error buildPDF")
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });

})(jQuery);

function removeCustomer($id) {
    let elements = document.getElementsByClassName("input-group customers-" + $id);
    while (elements[0]) elements[0].parentNode.removeChild(elements[0])
}
