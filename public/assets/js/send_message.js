$('#contact-form input, #contact-form textarea').on('input', function (e) {
    $("#send_a_message").removeAttr("disabled");

    $(e.currentTarget).removeClass("border border-danger");
});

$('#contact-form').on('submit', function (e) {
    e.preventDefault();
    var error_wrapper = $('#error-wrapper');
    var successMessage = error_wrapper.find('#successAlert');
    var errorMessage = error_wrapper.find('#errorAlert')
    errorMessage.hide();
    successMessage.hide();
    var form = $(e.currentTarget);
    var button = $('#send_a_message');

    button.attr('disabled', true);
    button.find('span').toggleClass('d-none');

    setTimeout(() => {
        $.ajax({
            url: form.attr('action'),
            type: "POST",
            data: form.serialize(),
            dataType: 'json',
            processData: false,
            cache: false,
        })
            .done(res => {
                successMessage.show();
            })
            .fail(err => {
                if (err.hasOwnProperty('responseJSON') && err.responseJSON.hasOwnProperty('errors')) {
                    errors = err.responseJSON.errors;
                    var html = '<p>There were errors in your input.</p><ul style="margin-left:22px;">';
                    for (error in errors) {
                        html += `<li>${ errors[ error ] }</li>`;
                        $(`[name=${ error }]`).addClass("border border-danger");
                    }
                    html += '</ul>';
                    errorMessage.html(html).show();
                    return;
                }
                errorMessage.html('<p>An error occurred while sending your mesage.</p>').show();
            }).always(data => {
                button.find('span').toggleClass('d-none');
                button.attr('disabled', 'false');
                $('#scrollTo').get(0).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'start',
                });
            })
    }, 2000);
});
