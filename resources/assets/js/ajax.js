$(document).ready(function(){
    console.log("hola mundo");
            $('#alert').hide();

            $('.btn-delete').click(function(e){
                e.preventDefault();

                if( ! confirm("¿Estas seguro de eliminar ?")){
                    return false;
                }

                var row = $(this).parents('tr');
                var form = $(this).parents('form');
                var url = form.attr('action');

                $('#alert').show();

                $.post(url, form.serialize(), function(result){
                    row.fadeOut();
                    $('#products-total').html(result.total);
                    $('#alert').html(result.message);
                }).fail(function(){
                    $('#alert').html('Algo salio mal');
                });

            });
});