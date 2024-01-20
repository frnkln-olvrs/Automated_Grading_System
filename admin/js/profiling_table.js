$(document).ready(function(){
  dataTable = $("#main_profiling").DataTable({
    dom: 'Brtp',
    responsive: true,
    pageLength: 10,
    buttons: [
      {
        remove: 'true',
      }
    ],
    'columnDefs': [ {
        'targets': [1,2,6], /* column index */
        'orderable': false, /* true or false */
    }]
  });

  var table = dataTable;
  var filter = createFilter(table, [1,2]);

  function createFilter(table, columns) {
    var input = $('input#keyword').on("keyup", function() {
      table.draw();
    });
    
    $.fn.dataTable.ext.search.push(function(
      settings,
      searchData,
      index,
      rowData,
      counter
    ) {
      var val = input.val().toLowerCase();
  
      for (var i = 0, ien = columns.length; i < ien; i++) {
          if (searchData[columns[i]].toLowerCase().indexOf(val) !== -1) {
          return true;
          }
      }
  
      return false;
    });
    
    return input;
  }

  $('select#faculty-academic_rank').on('change', function(e){
    var status = $(this).val();
    dataTable.columns([3]).search(status).draw();
  });

  $('select#faculty_type').on('change', function(e){
    var status = $(this).val();
    dataTable.columns([5]).search(status).draw();
  });
})