$(document).ready(function(){
  dataTable = $("#main_profiling").DataTable({
    dom: 'Brtp',
    responsive: true,
    pageLength: 10,
    buttons: none,
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
})