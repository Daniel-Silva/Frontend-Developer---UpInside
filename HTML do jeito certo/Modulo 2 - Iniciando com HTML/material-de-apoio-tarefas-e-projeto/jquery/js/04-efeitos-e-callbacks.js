$(function () {

    //SELETOR, EVENTO, CALLBACK, ACAO
    $('.j_mouseover').mouseenter(function () {
        //alert("Passou o mouse no H1. Seu Texto é " + $(this).text());
    });
    
    //SELETOR, EFEITO, CALLBACK, ACAO
    $('a').click(function(){
        $('a').fadeOut(2000,function(){
            $(this).show();
        });
        return false;
    });

});


