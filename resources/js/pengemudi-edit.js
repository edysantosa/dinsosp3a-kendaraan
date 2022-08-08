require('./dinsosp3a');
require('../template-resources/plugins/validatejs/validate.min.js');

$(document).ready(function() {
    $(".xp-form-validate").validate({
        ignore: [],
        errorClass: "invalid-feedback animated fadeInDown",
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        highlight: function(e) {
            $(e).closest(".form-group .form-control").removeClass("is-invalid").addClass("is-invalid");
        },
        success: function(e) {
            $(e).closest(".form-group .form-control").removeClass("is-invalid");
            $(e).remove();
        },
        rules: {
            "nik": {
                required: !0,
            },
            "nama": {
                required: !0,
            },
            "hp": {
                required: !0,
            },
        },
        messages: {
            "nik": {
                required: "Data NIK masih kosong",
            },
            "nama": {
                required: "Data nama masih kosong",
            },
            "hp": {
                required: "Data nomer hp masih kosong",
            },
        }
    });
});
