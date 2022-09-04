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

    init_SmartWizard();
})(jQuery);
/*
 * WIZARD
 */
function init_SmartWizard() {
    if (typeof ($.fn.smartWizard) === 'undefined') { return; }

    $('#wizard').smartWizard({
        selected: 0,  // Selected Step, 0 = first step
        keyNavigation: true, // Enable/Disable key navigation(left and right keys are used if enabled)
        enableAllSteps: false,  // Enable/Disable all steps on first load
        transitionEffect: 'fade', // Effect on navigation, none/fade/slide/slideleft
        contentURL:null, // specifying content url enables ajax content loading
        contentURLData:null, // override ajax query parameters
        contentCache:true, // cache step contents, if false content is fetched always from ajax url
        cycleSteps: false, // cycle step navigation
        enableFinishButton: false, // makes finish button enabled always
        hideButtonsOnDisabled: true, // when the previous/next/finish buttons are disabled, hide them instead
        errorSteps:[],    // array of step numbers to highlighting as error steps
        labelNext:'Próximo', // label for Next button
        labelPrevious:'Anterior', // label for Previous button
        labelFinish:'Finalizar',  // label for Finish button
        noForwardJumping:false,
        onLeaveStep: null, // triggers when leaving a step
        onShowStep: null,  // triggers when showing a step
        onFinish: null  // triggers when Finish button is clicked
    });

    $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
    });

    $('.buttonNext').addClass('btn btn-success');
    $('.buttonPrevious').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-dark');

    $('.stepContainer').css('height', 2800);

    $('.buttonNext').css('float','right');
    $('.buttonFinish').css('float','right');

};

function removeCustomer($id) {
    let elements = document.getElementsByClassName("input-group customers-" + $id);
    while (elements[0]) elements[0].parentNode.removeChild(elements[0])
}

function onFinish() {
    window.location = window.location.href;
}

/*
 * UPLOAD
 */
var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#image-upload", {
    maxFilesize: 3,
    thumbnailWidth: 200,
    acceptedFiles: ".pdf",
});

myDropzone.on("sending", function(file, xhr, formData) {
    formData.append("_token", CSRF_TOKEN);
});
/*
 * UPLOAD
 */
