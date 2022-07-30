(function ($) {
    //$('#cpf').inputmask("999.999.999-99");

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
                console.log(result);

                if(result) {
                    let value = result.cpf + ' - ' + result.name;

                    $('#customers').append('<input type="text" name="customers[]" ' +
                        'class="form-control" value="' + value + '" data-id="' + result.id + '" disabled />');
                }
            },
            error: function (request, status, error) {
                console.log(request, status, error);
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });

})(jQuery);
