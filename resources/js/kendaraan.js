require('./dinsosp3a');

$(document).ready(function() {
  var table = $('.yajra-datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('kendaraan.index') }}",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'name', name: 'name'},
          {data: 'gender', name: 'gender'},
          {data: 'email', name: 'email'},
          {data: 'phone', name: 'phone'},
          {
              data: 'action', 
              name: 'action', 
              orderable: true, 
              searchable: true
          },
      ]
  });
});


