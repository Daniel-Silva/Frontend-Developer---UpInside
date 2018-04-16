$(function(){   
    
    //SELETOR, EVENTO, CALLBACK, ACAO
    $('.j_alert').click(function(){
        var texto = $(this).text();
        alert(texto);
    });
    
    $('a[title="UpInside Treinamentos"]').click(function(){
        $(this).text($(this).attr('title'));
        
        return false;
    });    
});


