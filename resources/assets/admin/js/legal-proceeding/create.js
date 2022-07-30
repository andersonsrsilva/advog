(function ($) {
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

})(jQuery);
