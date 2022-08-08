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
              data: 'action', 
              name: 'action', 
              orderable: true, 
              searchable: true
          },
      ]
  });
});