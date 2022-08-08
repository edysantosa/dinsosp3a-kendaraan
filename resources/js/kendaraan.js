require('./dinsosp3a');
import bootbox from 'bootbox';
import moment from 'moment';
// var sitebase = $('#sitebase').data();
var datatable;

$(document).ready(function() {
  datatable = $('.yajra-datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "kendaraan",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'jenis', name: 'jenis'},
          {data: 'merek', name: 'merek'},
          {data: 'kapasitas', name: 'kapasitas', render: function(cellData) {
            return cellData + " orang";
          }},
          {data: 'pelat', name: 'pelat'},
          {data: 'pajak', name: 'pajak', render: function(cellData) {
            moment.locale('id');
            return moment(cellData, 'YYYY-MM-DD').format('LL');
          }},
          {
              data: 'action', 
              name: 'action', 
              orderable: true, 
              searchable: true
          },
      ]
  });
}).on('click', '.trigger', function(e){

    let current_row = $(this).parents('tr');
    if (current_row.hasClass('child')) {
        current_row = current_row.prev();
    }
    let id = current_row.attr('id');

    switch($(this).data('trigger')) {
      case 'delete':
        deleteKendaraan(id);
        break;
      case 'edit':
        location.href = 'kendaraan/' + id;
        break;
    }

});


/**
 * Fungsi2 render datatable
 */
// function buildBalanceColumn(cellData, type, rowData){
//     return 'Rp. ' + helper.formatNumberIndonesia(cellData);
// }

/**
 * Fungsi2 trigger
 */

function deleteKendaraan(id){
    bootbox.confirm({
        title: 'Hapus Kendaraaan',
        message: 'Yakin hapus data kendaraan ini?',
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-primary'
            },
            cancel: {
                label: 'Cancel',
                className: 'btn-light'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({
                    url : `kendaraan/${id}`,
                    type : 'delete',
                    dataType : 'json',
                    // data : {id:id, task:'delete'},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).fail(function(xhr, status, statusText){
                    var message = "Unknown error has occured";
                    if( xhr.responseJSON ){
                        message = xhr.responseJSON.message;
                    }

                    bootbox.alert(message);
                }).done(function(response){
                    bootbox.alert(response.message);
                    datatable.draw();
                });
            }
        }
    });
}