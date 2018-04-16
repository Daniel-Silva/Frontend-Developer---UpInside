$(function () {

    //SELETOR, EVENTO, CALLBACK, ACAO
    $('.j_mouseover').mouseenter(function () {
        //alert("Passou o mouse no H1. Seu Texto é " + $(this).text());
    });

    //SELETOR, EFEITO, CALLBACK, ACAO
    $('a').click(function () {
        //deletaPost($(this).attr('rel'));
        alert($(location).attr('href'));
        return false;
    });
    
    
    $(window).load(function(){
        //CALLBACK, TEMPO
        var tempo = setInterval(function(){
            $('a').fadeToggle(function(){}); 
        }, 200);     
        
        $('a').click(function(){
            clearInterval(tempo);
        });
    });


    function deletaPost(postId) {
        var alerta = confirm('Tem Certeza Que Quer Deletar?');
        if (alerta === true) {
            $('#' + postId).fadeOut(function(){
                alert('Post Removido com Sucesso!');
            });
        } else {
            alert('NO');
        }
    }
});


