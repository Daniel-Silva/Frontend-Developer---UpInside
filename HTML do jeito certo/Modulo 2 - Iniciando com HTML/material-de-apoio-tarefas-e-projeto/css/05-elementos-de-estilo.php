<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>

        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Open Sans', sans-serif;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }

            .content{
                float: left;
                width: 100%;
                padding: 5%;
                background: #ccc;
                background-image: url(http://www.linhadapraia.pt/imgs/bg/fundo.jpg);
                background-size: cover;
                background-attachment: fixed;
                text-align: center;
            }

            .news{  
                padding: 30px;
                color: #fff;
                display: inline-block;
                max-width: 500px;
                background: rgba(255,255,225,0.7);
                color: #000;
                box-shadow: 0 2px 5px #555;
            }
            
            .news_header{
                margin-bottom: 30px;
            }
            
            .title{
                font-size: 1.8em;
                font-weight: 600;
            }
            
            .tagline{
                margin-top: 15px;
                font-size: 1em;
                text-transform: uppercase;
                
            }
            
            .optin{
                display: block;
            }
            
            .optin input{
                padding: 15px;
                border: 1px solid #ccc;
                display: block;
                width: 100%;
                margin-bottom: 15px;
                font-family: 'Arial', serif;
            }
            
            button{padding: 8px 25px; cursor: pointer; font-size: 1.2em; font-weight: 600; text-transform: uppercase; color: #fff; border: 1px solid #22542d; background: #409d55;}
            button:hover{background: #44a85b;}
            
            .clear{clear: both;}
        </style>

    </head>
    <body>
        <div class="content">
            <article class="news">
                <header class="news_header">
                    <h1 class="title">Conheça o Curso Work Series - HTML5 do jeuto Certo!</h1>
                    <p class="tagline">Descubra como utilizar o poder do HTML5 semântico, somado a avançadas técnicas de SEO e Marketing Digital para criar sites que geram resultados rápidos e eficientes!</p>
                </header>

                <form class="optin">
                    <input type="text" name="nome" placeholder="Seu Nome:"/>
                    <input type="email" name="email" placeholder="Seu E-mail:"/>
                    <button>Enviar</button>
                </form>

                <div class="clear"></div>
            </article>
        </div>
    </body>
</html>
