$(document).ready(function(){
    $('#dynamic').hide();

    $('#topik').change(function(){
        if ($('#topik').val() == 'Proyek'){
            $('#dynamic').show();
        }
        else{
            $('#dynamic').hide();
        }
    })


    //Event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        //Ajax
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val() + '&category=' + $('#kategori').val());
    
        $.get('ajax/faq.php?keyword=' + $('#keyword').val(), function(data){
            $('#for-ajax').html(data);
        });


    });
});