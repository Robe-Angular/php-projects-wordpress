var url='http://proyecto-laravel.com.devel';
window.addEventListener("load",function(){
    
    $('.btn-like').css('cursor','pointer');
    $('.btn-dislike').css('cursor','pointer');
    var regex = /(\d+)/g;
    //Botón de like
    function like(){
        $('.btn-like').unbind('click').click(function(){
           console.log('like');
           $(this).addClass('btn-dislike').removeClass('btn-like');
           $(this).attr('src', url+'/img/heart-red.png');
           
           let identificador_en_clase =$(this).attr('class').match(regex);
           
           
           let valor = $('.elemento-delista-'+identificador_en_clase).text();
           let valor_numerico = parseInt(valor);
           $('.elemento-delista-'+identificador_en_clase).text(valor_numerico + 1);
           
           $.ajax({
               url: url+'/like/'+$(this).data('id'),
               type: 'GET',
               success: function(response){
                   if(response.like){
                       console.log('Has dado like a la publicación');
                   }else{
                       console.log('Error al dar like');
                   }
               }
           });
           dislike();
        });
    }
    like();
    function dislike(){
        //Botón de dislike
        $('.btn-dislike').unbind('click').click(function(){
           console.log('dislike');
           $(this).addClass('btn-like').removeClass('btn-dislike');
           $(this).attr('src', url+'/img/heart-black.png');
           
           let identificador_en_clase =$(this).attr('class').match(regex);
           
           
           let valor = $('.elemento-delista-'+identificador_en_clase).text();
           let valor_numerico = parseInt(valor);
           $('.elemento-delista-'+identificador_en_clase).text(valor_numerico - 1);
           
           like();
           $.ajax({
               url: url+'/dislike/'+$(this).data('id'),
               type: 'GET',
               success: function(response){
                   if(response.like){
                       console.log('Has dado dislike a la publicación');
                   }else{
                       console.log('Error al dar dislike');
                   }
               }
           });
        });
    }
    dislike();
    
    //Buscar
    $('#buscador').submit(function(e){
        
        $(this).attr('action',url+'/gente/'+$('#buscador #search').val());
        
    })
});


