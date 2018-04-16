$(function () {

    //SELETOR, EVENTO, CALLBACK, ACAO
    $('.j_mouseover').mouseenter(function () {
        //alert("Passou o mouse no H1. Seu Texto é " + $(this).text());
    });

    //SELETOR, EFEITO, CALLBACK, ACAO
    $('a').click(function () {
        deletaPost($(this).attr('rel'));
        return false;
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


