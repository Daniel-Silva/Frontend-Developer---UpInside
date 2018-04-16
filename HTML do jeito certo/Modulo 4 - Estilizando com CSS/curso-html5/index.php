<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de HTML5 - Daniel Silva</title>
        <meta name="description" content="Esta página web está sendo contruida no curso de HTML5 da UpInside Treinamento"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="shortcut icon" href="img/favicon.png" />
        <link rel="stylesheet" href="css/main.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        

    </head>
    <body>
        
        <p class="j-back navbar-top">
            <i class="material-icons intem">keyboard_arrow_up</i>
        </p>

        <header class="main-header container home">
            
            <div class="content">
                
                <img class="main-logo" title="Curso de HTML5" alt="[Curso de HTML5]" src="img/_logo.png"/>
                <h1 class="fontzero">Curso de HTML5 - Daniel Silva</h1>

                <ul class="main-menu">
                    <li><a href="#home" title="Curso de HTML5">Home</a></li>
                    <li><a href="#curso" title="Sobre o Curso de HTML5">O Curso</a></li> 
                    <li><a class="special" target="_blank" href="//www.upinside.com.br/cursos/html5-do-jeito-certo" title="Curso Work Series - HTML5 do jeito Certo">Work Series</a></li> 
                    <li><a href="#videaulas" title="Confira Vídeo Aulas do Curso de HTML5">Vídeo Aulas</a></li> 
                    <li><a href="#contato" title="Contato Sobre o Curso de HTML5">Fale Conosco</a></li> 
                </ul>
                
            </div>
            <div class="clear"></div>
            
        </header>
        <!--FECHA CABEÇALHO-->

        <main class="container">

            <article class="destaque container">
                
                <div class="content">
                    
                    <header>
                 
                        <h1>Bem-vindo(a) ao Curso Gratuito de HTML5</h1>
                        <p class="tagline">Você está pronto para aprender HTML5, CSS e JQuery de forma descomplicada, gratuita e do jeito certo? Confira o nosso curso gratuito de HTML5!</p>
                        <div>
                            <div class="fb-like" data-href="/www.facebook.com/upinside" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                            <div class="fb-share-button" data-href="//www.upinside.com.br/cursos/html5-do-jeito-certo" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.upinside.com.br%2Fcursos%2Fhtml5-do-jeito-certo&amp;src=sdkpreparse">Compartilhar</a></div>
                        </div>

                    </header>
                    
                    <div class="destaque-video">
                        <div class="ratio">
                            <iframe class="media" src="//www.youtube.com/embed/PnDsmgeLK_0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <div class="clear"></div>
                    
                </div>
                
            </article>
            <!--DESTAQUE DO SITE-->
            
            <section class="container curso">
                
                <div class="content">
                    
                    <header class="big-title">
                        <h1>Curso de HTML5</h1>
                        <p class="tagline">Confira o que você vai aprender no curso de HTML5:</p>
                    </header>

                    <article class="curso-item">
                        <img title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]" src="img/01.jpg"/>
                        <h1>HTML e HTML5</h1>
                        <p>Aprenda a utilizar o HTML5 do jeito certo! Segmentando seu site e distribuindo o conteúdo de forma otimizada e de ponta a ponta!</p>
                        <span><time datetime="<?= date('y-m-d');?>"><?= date('d/m/y \à\s H:i\h\s');?></time></span>
                    </article>

                    <article class="curso-item">
                        <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                        <h1>CSS e CSS3</h1>
                        <p>Trabalhe com produtividade e qualidade o seu CSS. Aplicando classes coesas e focando no que realmente importa. O conteúdo do site!</p>
                        <span><time datetime="<?= date('y-m-d');?>"><?= date('d/m/y \à\s H:i\h\s');?></time></span>
                    </article>

                    <article class="curso-item">
                        <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                        <h1>jQUERY!</h1>
                        <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery. Entender a biblioteca e seu uso padrão. Produtividade é essencial!</p>
                        <span><time datetime="<?= date('y-m-d');?>"><?= date('d/m/y \à\s H:i\h\s');?></time></span>
                    </article>

                    <article class="curso-item">
                        <img title="Curso Work Series - HTML5 do Jeito Certo!" alt="[Curso Work Series - HTML5 do Jeito Certo!]" src="img/04.jpg"/>
                        <h1>WORK SERIES</h1>
                        <p>Terminou o curso de HTML5? Então é hora de se tornar um ninja com a linguagem e aprender técnicas avançadas de otimização!</p>
                        <span><time datetime="<?= date('y-m-d');?>"><?= date('d/m/y \à\s H:i\h\s');?></time></span>
                    </article>
                    
                    <div class="clear"></div>
                    
                </div>
                
                             
                <footer class="container cursos-footer">
                    
                    <div class="content">
                        
                        <img title="Configira p curso de HTML5 do jeito certo!" alt="[Configira p curso de HTML5 do jeito certo!]" src="img/05.png"/>
                        <h1>Curso HTML5 do Jeito Certo!</h1>
                        <p>Aprenda a utilizar todo poder do HTML5 Semântico somado a avançadas tecnicas de SEO para criar sites altamente lucrativos e que geram resultados rápidos e eficientes!</p>
                        <a class="btn" target="_blank" title="Conheça o curso HTML5 do jeito certo!" href="//www.upinside.com.br/cursos/html5-do-jeito-certo">Conhecer agora</a>
                        <div class="clear"></div>
                        
                    </div>                    
                    
                </footer>      
             
            </section>
            <!--O CURSO-->
            
            <section class="container videaulas">
                
                <div class="content">
                    
                    <header class="big-title">
                        <h1>VÍDEO AULAS</h1>
                        <p class="tagline">confira algumas aulas do curso de HTML5</p>
                    </header>

                    <div class="videaulas-videos">
                        <article>
                            <img title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]" src="img/01.jpg"/>
                            <h1>HTML e HTML5</h1>
                            <p>Aprenda a utilizar o HTML5 do jeito certo! </p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                            <h1>CSS e CSS3</h1>
                            <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                            <h1>jQUERY!</h1>
                            <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - HTML e CSS" alt="[Curso de HTML5 - HTML e CSS]" src="img/01.jpg"/>
                            <h1>HTML e HTML5</h1>
                            <p>Aprenda a utilizar o HTML5 do jeito certo! </p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                            <h1>CSS e CSS3</h1>
                            <p>Trabalhe com produtividade e qualidade o seu CSS.</p>
                        </article>

                        <article>
                            <img title="Curso de HTML5 - jQUERY!" alt="[Curso de HTML5 - jQUERY!]" src="img/03.jpg"/>
                            <h1>jQUERY!</h1>
                            <p>JavaScript? Claro! Contudo, aqui vamos trabalhar com jQuery.</p>
                        </article>
                    </div>

                    <aside class="videoaulas-sidebar">
                        
                        <div class="border-bottom">
                            
                            <div class="content">
                                
                                 <header>
                                    <h1 class="title">Comentários</h1>
                                </header>

                                <article class="videoaulas-sidebar--coment">
                                    <img title="Comentário de Robson V. Leite" alt="[Comentário de Robson V. Leite]" src="img/foto.jpg"/>
                                    <h1><span class="fontzero">Comentário de </span>Robson V. Leite</h1>
                                    <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML!</p>
                                </article>

                                <article class="videoaulas-sidebar--coment">
                                    <img title="Comentário de Daniel Silva" alt="[Comentário de Daniel Silva]" src="img/member.jpg"/>
                                    <h1><span class="fontzero">Comentário de </span>Daniel Silva</h1>
                                    <p>O curso foi pensado para levar o aluno do zero ao ninja não somente em HTML!</p>
                                </article>

                                <div class="clear"></div>
                                
                            </div>
                            
                        </div>
                        
                    </aside>
                    
                    <div class="clear"></div>
                    
                </div>
                
            </section>
            <!--VIDEO AULAS-->
        </main>
        <!--FECHA CONTEÚDO-->
        
        <article class="container contato">
            
            <div class="content">
                
                <header>
                    <h1>Entre em contato:</h1>
                    <p class="tagline">Este formulário está aqui apenas para estudos do curso e HTML5</p>
                </header>

                <form class="contato-form j-form--submit"action="" method="post">
                    <label class="medium">
                        <span>Nome:</span>
                        <input type="text" name="nome" title="Informe seu Nome!" placeholder="Informe seu nome" required/>
                    </label>

                    <label class="medium">
                        <span>E-mail:</span>
                        <input type="email" name="email" title="Informe seu E-mail!" placeholder="Informe seu E-mail" required/>
                    </label>

                    <label>
                        <span>Mensagem</span>
                        <textarea rows="3" name="mensagem" title="Deixe Sua Mensagem" placeholder="Deixe sua mensagem" required></textarea>
                    </label>

                    <img class="form-load" title="Aguarde, Enviando Contato" alt="[Aguarde, Enviando Contato]" src="img/ajax-loader.gif"/>
                    <button class="btn">Enviar Contato!</button>
                </form>
                
                <div class="clear"></div>                
                
            </div>
            
        </article>
        <!--CONTATO-->

        <footer class="container main-footer">
            
            <div class="border-bottom">
                
                <div class="ftcontent">

                    <h1 class="title">Curso de HTML5</h1>
                    <nav>
                        <h1 class="subtitle">UpInside Treinamentos</h1> 
                        <ul class="main-footer--social">
                            <li><a target="_blank" title="UpInside Treinamentos" href="//www.upinside.com.br/">UpInside</a></li>
                            <li>|</li>
                            <li><a target="_blank" title="UpInside Treinamentos No Facebook" href="//www.facebook.com/upinside">Facebook</a></li>
                            <li>|</li>
                            <li><a target="_blank" title="UpInside Treinamentos No YouTube" href="//www.youtube.com/RobsonVleite">YouTube</a></li>
                        </ul>
                    </nav>

                    <div class="clear"></div>

                </div>
            
            </div>
            
        </footer>
        <!--FECHA RODAPÉ-->
        
        <!--JQUERY-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/code.js"></script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
