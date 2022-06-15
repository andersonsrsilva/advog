(function ($) {
    $('#cpf').inputmask("999.999.999-99");
    $('#zip_code').inputmask("99.999-999");
    $('#home_phone').inputmask("(99) 9999-9999");
    $('#mobile_phone').inputmask("(99) 9 9999-9999");

    $('#city_input').show();
    $('#city_select').hide();

    $("#zip_code").keyup(function() {
        var zip = $(this).val().replace(/\D/g, '');
        var valided_cep = /^[0-9]{8}$/;
        if(valided_cep.test(zip)) {
            via_cep(zip);
        }
    });

    $("#uf").change(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
        });
        jQuery.ajax({
            url: "/admin/city/" + $('#uf').val(),
            method: 'get',
            beforeSend: function () {
                $('#loader').show();
            },
            success: function(result) {
                $('#city_select option').remove();
                $("#city_select").append('<option value="0">-- SELECIONE -- </option>');

                $.each(result, function(index, value){
                    $("#city_select").append('<option value="' + index + '">' + value  + '</option>');
                });
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });

    function via_cep(cep) {
        $('#loader').show();
        $('#city_input').show();
        $('#city_select').hide();

        clean_form_zip_code();

        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
            if (!("erro" in dados)) {
                $("#ibge_code").val(dados.ibge);
                $("#address").val(dados.logradouro);
                $("#district_address").val(dados.bairro);
                $("#city_input").val(dados.localidade);
                $("#other_address").val(dados.complemento);
                $('#uf').val(dados.uf);
            }
            else {
                $('#city_input').hide();
                $('#city_select').show();
                $("#city_select").append('<option value="0">-- SELECIONE -- </option>');
            }
            $('#loader').hide();
        });
    }

    function clean_form_zip_code() {
        $("#ibge_code").val("");
        $("#address").val("");
        $("#number_address").val("");
        $("#other_address").val("");
        $("#district_address").val("");
        $("#city_input").val("");
        $('#city_select option').remove();
        $('#uf').val("0");
    }

})(jQuery);
