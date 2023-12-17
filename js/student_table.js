$(document).ready(function(){
  dataTable = $("#product").DataTable({
      dom: 'Brtp',
      responsive: true,
      fixedHeader: true,
      pageLength: 5,
      buttons: {
        buttons: [
          { 
            extend: 'excel', 
            className: 'excelButton' 
          },
          
        ]
      },
      'columnDefs': [ {
          'targets': [3,4,5,6,7], /* column index */
          'orderable': false, /* true or false */
      }]
  });

  dataTable.buttons().container().appendTo($('#MyButtons'));

  var table = dataTable;
  var filter = createFilter(table, [1,2,3,5,6]);

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

  $('select#product-category').on('change', function(e){
      var status = $(this).val();
      dataTable.columns([3]).search(status).draw();
  });

  $('select#product-status').on('change', function(e){
      var status = $(this).val();
      dataTable.columns([4]).search(status).draw();
  });
})