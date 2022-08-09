require('./dinsosp3a');
require('../template-resources/plugins/validatejs/validate.min.js');
import moment from 'moment';
import '../template-resources/plugins/datepicker/datepicker.min.js';
import '../template-resources/plugins/datepicker/i18n/datepicker.id.js';
import '../template-resources/plugins/datepicker/datepicker.min.css';
import '../template-resources/plugins/select2/select2.min.js';


$(document).ready(function() {
    $('#waktu').datepicker({
        // timepicker: true,
        // timeFormat: 'hh:ii',
        language: 'id',
        autoClose: true,
        dateFormat: 'dd/mm/yyyy',
        // multipleDates: true,
        // selectedDates: ['2022-08-01']
    });
    let date = moment($('#waktu').data('date'), 'DD/MM/YYYY').isValid() ? moment($('#waktu').data('date'), 'DD/MM/YYYY') : moment().set("hour", 7).set("minute", 30);
    $('#waktu').datepicker().data('datepicker').selectDate(new Date(date));

    $('.xp-select2-single').select2();
    $('.xp-select2-multi-select').select2({
        placeholder: 'Choose',
    });

    // $(".xp-form-validate").validate({
    //     ignore: [],
    //     errorClass: "invalid-feedback animated fadeInDown",
    //     errorElement: "div",
    //     errorPlacement: function(error, element) {
    //         // $(a).parents(".form-group").append(e);
    //         // console.log($(element).attr('id'));
    //         // if (element.is(":radio") || element.is(":checkbox")) {
    //         //     error.appendTo(element.parent());
    //         // } else {
    //         //     error.insertAfter(element);
    //         // }
    //         error.insertAfter(element);
    //     },
    //     highlight: function(e) {
    //         $(e).closest(".form-group .form-control").removeClass("is-invalid").addClass("is-invalid");
    //     },
    //     success: function(e) {
    //         $(e).closest(".form-group .form-control").removeClass("is-invalid");
    //         $(e).remove();
    //     },
    //     rules: {
    //         "jenis": {
    //             required: !0,
    //         },
    //         "merek": {
    //             required: !0,
    //         },
    //         "kapasitas": {
    //             required: !0,
    //         },
    //         "pelat": {
    //             required: !0,
    //         },
    //         "pajak": {
    //             required: !0,
    //         },
    //     },
    //     messages: {
    //         "jenis": {
    //             required: "Data jenis masih kosong",
    //         },
    //         "merek": {
    //             required: "Data merek masih kosong",
    //         },
    //         "kapasitas": {
    //             required: "Data kapasitas masih kosong",
    //         },
    //         "pelat": {
    //             required: "Data pelat masih kosong",
    //         },
    //         "pajak": {
    //             required: "Data pajak masih kosong",
    //         },
    //     }
    // });
});
