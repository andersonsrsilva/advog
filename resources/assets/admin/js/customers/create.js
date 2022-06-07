(function ($) {
    limpa_formulário_cep();

    $('#cpf').inputmask("999.999.999-99");
    $('#cep').inputmask("99.999-999");
    $('#tel_residencial').inputmask("(99) 9999-999");
    $('#tel_celular').inputmask("(99) 9 9999-999");
    
    $('#cidade_input').show();
    $('#cidade_select').hide();

    $("#cep").keyup(function() {
        var cep = $(this).val().replace(/\D/g, '');
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            via_cep(cep);            
        }
    });

    $("#estado").change(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
        });
        jQuery.ajax({
            url: "/admin/city/" + $('#estado').val(),
            method: 'get',
            beforeSend: function () { 
                $('#loader').show();
            },
            success: function(result) {
                $('#cidade_select option').remove();
                $("#cidade_select").append('<option value="0">-- SELECIONE -- </option>');

                $.each(result, function(index, value){
                    $("#cidade_select").append('<option value="' + index + '">' + value  + '</option>');
                });
            },
            complete: function() {
                $('#loader').hide();
            }
        });
    });

    function via_cep(cep) {
        $('#loader').show();
        $('#cidade_input').show();
        $('#cidade_select').hide();    

        limpa_formulário_cep();   

        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
            if (!("erro" in dados)) {   
                $("#ibge").val(dados.ibge);
                $("#endereco").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade_input").val(dados.localidade);
                $("#complemento").val(dados.complemento);     
                $('#estado').val(dados.uf); 
            } 
            else {                      
                $('#cidade_input').hide();
                $('#cidade_select').show();    
                $("#cidade_select").append('<option value="0">-- SELECIONE -- </option>');
            }
            $('#loader').hide();
        });
    }

    function limpa_formulário_cep() {
        $("#ibge").val("");
        $("#endereco").val("");
        $("#numero").val("");
        $("#complemento").val(""); 
        $("#bairro").val("");
        $("#cidade_input").val("");
        $('#cidade_select option').remove();
        $('#estado').val("0");
    }

})(jQuery);