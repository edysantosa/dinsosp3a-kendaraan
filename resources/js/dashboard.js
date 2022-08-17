require('./dinsosp3a');
import bootbox from 'bootbox';
import moment from 'moment';
var datatable;

$(document).ready(function() {
  datatable = $('.yajra-datatable').DataTable({
      order: [["1", "asc"]],
      processing: true,
      serverSide: true,
      ajax: "jadwal",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'waktu', name: 'waktu', render: function(cellData) {
            moment.locale('id');
            return moment(cellData).format('LL') + '<br>' +  moment(cellData).format('HH:mm') ;
          }},
          {data: 'kegiatan', name: 'kegiatan'},
          {data: 'user.name', name: 'user'},
          {data: 'pengemudi.nama', name: 'pengemudi'},
          {data: null, name: 'kendaraan', render: function(cellData, type, rowData) {
            return rowData.kendaraan.merek + " - " + rowData.kendaraan.pelat;
          }},
          {
              class: 'text-center', 
              data: 'surat_tugas', 
              name: 'surat_tugas', 
              orderable: false, 
              searchable: false
          },
          {
              data: 'action', 
              name: 'action', 
              orderable: false, 
              searchable: false
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
        deleteJadwal(id);
        break;
      case 'edit':
        location.href = 'jadwal/' + id;
        break;
    }
});

/**
 * Fungsi2 trigger
 */

function deleteJadwal(id){
    bootbox.confirm({
        title: 'Hapus Jadwal',
        message: 'Yakin hapus data jadwal ini?',
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
                    url : `jadwal/${id}`,
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