$(function(){

    //SCROLL DOWN
    $('.main-header a[class!="special"]').click(function(){   
        var goTo = $('.'+ $(this).attr('href').replace('#', '')).position().top;
        $('html, body').animate({scrollTop: goTo - $('.main-header').outerHeight()}, 1000 );        
        return false;
    });
    
    //MENU FIXO
    $(window).scroll(function(){
        if($(this).scrollTop() > $('.main-header').outerHeight() + 50){
            $('body').css('padding-top', $('.main-header').outerHeight());
            $('.main-header').addClass('navbar-fixed');
            $('.j-back').fadeIn(500);
        }else {
            $('body').css('padding-top', '0');
            $('.main-header').removeClass('navbar-fixed');
            $('.j-back').fadeOut(500);
        }
    });
    
    //MENU TOP
    $(window).ready(function(){ 
        $('.j-back').click(function(){
            $('html, body').animate({scrollTop: 0}, 1000 );
        })
    });
    
    //FORM SUBMIT
    $('.j-form--submit').submit(function(){
        
        var dados = $(this).serialize()
        
        $.ajax({
            url: 'js/ajax.php',
            data: dados,
            type: 'POST',
            dataType: 'json',
            beforeSend: function(){
                $('.form-load').fadeIn();
            },
            success: function(data) {
                console.log(data);
                $('.form-load').fadeOut();
                alert('Olá '+ data.nome +'! Obrigado por enviar sua mensagem.');
            }
        });
        return false;
    });
    
})

