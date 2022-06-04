(function ($) {
    $('#cep').inputmask("99.999-999");

    $("#cep").keyup(function() {
        var cep = $(this).val().replace(/\D/g, '');
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            via_cep(cep);            
        }
    });

    function via_cep(cep) {
        $("#endereco").val("...");
        $("#bairro").val("...");
        $("#cidade").val("...");
        $("#complemento").val("...");
        $('#estado').val("0");

        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
            if (!("erro" in dados)) {
                $("#endereco").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#complemento").val(dados.complemento);     
                $('#estado').val(dados.uf); 
            } 
            else {                      
                limpa_formulário_cep();
                alert('CEP não encontrado.')
            }
        });

    }

    function limpa_formulário_cep() {
        $("#endereco").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#complemento").val("");            
        $('#estado').val("0");
    }

})(jQuery);