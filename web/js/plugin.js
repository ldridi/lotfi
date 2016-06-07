

$(document).ready(function() {
    $('.dataTables-example').DataTable({
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            }
        ]

    });
} );/**
 * Created by lotfidev on 01/05/16.
 */


$(".testcopie").bind({
    copy : function(){
        console.log('copie');
    },
    paste : function(){
        console.log('paste');
    },
    cut : function(){
        console.log('cut');
    }
});


$(document).ready(function() {
    $('#selectmenu').on('change', function() {
        $.ajax({
            url: Routing.generate('menuSubCategorie', { menu: this.value }),

            type: 'POST',
            dataType: 'JSON',
            success: function(result) {

                notif = "";

                $.each(result, function (index, item) {
                    
                    notif += "<option value='" + item.id + "'>" + item.nom +"</option>";
                    
                    $('#selectsubcategorie').html(notif);
               });

            }
        });
    })
});

$(function(){
    $('#selectsubcategorie').children().remove().end().append('') ;
});

$(function(){
    $( "#form" ).submit(function( event ) {
        if($('#ingredient').val() == null){
            //$('#ingredient').addClass('has-error');
            $('#ingredienterror').addClass('has-error');
            //alert('ok');
        }
    });
});


