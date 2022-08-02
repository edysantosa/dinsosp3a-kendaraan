require('./bootstrap');
require('./dinsosp3a');
require('../template-resources/plugins/validatejs/validate.min.js');


$(document).ready(function() {
    $(".xp-form-validate").validate({
        ignore: [],
        errorClass: "invalid-feedback animated fadeInDown",
        errorElement: "div",
        errorPlacement: function(e, a) {
            $(a).parents(".form-group").append(e)
        },
        highlight: function(e) {
            $(e).closest(".form-group .form-control").removeClass("is-invalid").addClass("is-invalid");
        },
        success: function(e) {
            $(e).closest(".form-group .form-control").removeClass("is-invalid");
            $(e).remove();
        },
        rules: {
            "username": {
                required: !0,
                minlength: 3
            },
            "password": {
                required: !0,
            },
        },
        messages: {
            "username": {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 3 characters"
            },
            "password": {
                required: "Please provide a password",
            },
        }
    });
});