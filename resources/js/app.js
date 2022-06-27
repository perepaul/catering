const $ = window.$ = window.jQuery = require('jquery');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content'),
    }
})

require('bootstrap');
require('overlayscrollbars');
require('../../vendor/almasaeed2010/adminlte/dist/js/adminlte');

const { default: Swal } = require('sweetalert2');
import bsCustomFileInput from 'bs-custom-file-input'

window.bsCustomFileInput = bsCustomFileInput;

function checkAll() {
    $('table td input[type=checkbox]').prop('checked', true)
}

function unCheckAll() {
    $('table td input[type=checkbox]').prop('checked', false)
}

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    timer: 3000,
    timerProgressBar: true,
    showConfirmButton: false,
    heightAuto: false,
    didOpen: toast => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }

})

window.alertSuccess = function (message) {
    Toast.fire({
        text: message,
        iconHtml: '<i class="fa fa-check text-sm text-success"></i>',
        icon: 'success',
    })
}

window.alertError = function (message) {
    Toast.fire({
        text: message,
        iconHtml: '<i class="fas fa-times text-sm text-danger"></i>',
        icon: 'error'
    })
}

$('table th input[type=checkbox]').on('change', e => {
    return $(e.currentTarget).prop('checked') ? checkAll() : unCheckAll();
})

$('table td input[type=checkbox]').on('change', e => {
    var all = $('table td input[type=checkbox]');
    var checked = $('table td input[type=checkbox]:checked');
    $('table th input[type=checkbox]').prop('checked', all.length == checked.length);
})

$('.confirm-delete').on('click', e => {
    var elem = $(e.currentTarget);
    var redirect = elem.data('reload-url');
    var url = elem.data('href');
    Swal.fire({
        icon: 'warning',
        title: 'Confirm Delete',
        text: "Are you sure you want to delete this record?",
        cancelButtonText: 'Never Mind',
        cancelButtonColor: 'green',
        showCancelButton: true,
        confirmButtonColor: 'crimson',
        confirmButtonText: 'Continue',
        focusCancel: true,
    }).then(result => {
        if (result.isConfirmed) {
            $.ajax({
                url,
                method: 'POST',
                data: '_method=DELETE',
                dataType: 'json',
            })
                .done(res => {
                    alertSuccess(res.message || 'Success message here');
                    setTimeout(() => {
                        redirect ? location.href = redirect : location.href = `${ location.protocol }//${ location.hostname + ':' + location.port + location.pathname }`;
                    }, 2500);
                })
                .fail(error => {
                    alertError('Failed to delete record')
                })
        }
    })
})

$('#mass-delete').on('click', e => {
    const elem = $(e.currentTarget);
    var url = elem.data('href');
    var redirectUrl = elem.data('redirect-url');
    var ids = [];

    const checkedItems = $('table td input[type=checkbox]:checked');
    if (!checkedItems.length) {
        alertError('No records selected');
        return;
    }

    checkedItems.each((index, element) => {
        ids.push(element.value);
    })
    url += '/' + JSON.stringify(ids);

    Swal.fire({
        icon: 'warning',
        title: 'Confirm Mass Delete',
        text: "Are you sure you want to delete this record(s)?",
        cancelButtonText: 'Never Mind',
        confirmButtonText: 'Continue',
        cancelButtonColor: 'green',
        showCancelButton: true,
        confirmButtonColor: 'crimson',
        focusCancel: true,
    }).then(result => {
        if (result.isConfirmed) {
            $.ajax({
                url,
                method: 'POST',
                data: '_method=DELETE',
                dataType: 'json',
            })
                .done(res => {
                    alertSuccess(res.message || 'Success message here');
                    setTimeout(() => {
                        redirectUrl ? location.href = redirectUrl : location.href = `${ location.protocol }//${ location.hostname + ':' + location.port + location.pathname }`;
                    }, 2500);
                })
                .fail(error => {
                    alertError('Failed to delete record')
                })
        }
    })
})

//modal close buttons
$('[data-dismiss="modal"]').on('click', e => {
    $(e.currentTarget).parents('.modal').modal('hide');
});

if ($('table td[data-colspan]').length) {
    const colspan = $('td[data-colspan]');
    var ths = colspan.parents('tbody').siblings('thead').find('tr th');
    colspan.attr('colspan', ths.length);
}

