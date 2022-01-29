$(document).ready(function(){
    /** [ Start Datadables] */ 
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    /** [ End Datadables] */

    /** Show City By Governorate Id */
    $('.select-governorate').change(function(){
        $url = $(this).attr('data-url');
        $value = $(this).find("option:selected").val();
        $.ajax({
          url:$url,
          type:"GET",
          dataType:"JSON",
          data:{value:$value},
          success:function(data){
            $('.show-cities').html(data.cities);
          }
        });
    });

});