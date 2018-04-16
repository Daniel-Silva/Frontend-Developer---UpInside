<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            *{
                margin: 0;
                padding: 0;
            }

            body{
                height: 1600px;
            }

            .content{
                float: left;
                width: 80%;
                padding: 30px 10%;
                background: #ccc;

                background-color: red;
                background-image: url(http://www.linhadapraia.pt/imgs/bg/fundo.jpg);
                background-size: cover;
                background-attachment: fixed;
            }

            .news{     
                padding: 30px;
                color: #fff;
                float: left;
                width: 22.75%;
                margin-right: 3%;
                background: rgba(255,255,225,0.5);
                color: #000;
                
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }
            
            .news:nth-of-type(4n+0){
                margin-right: 0;
            }

            header{float: left;}
            p{float: left; width: 100%;}

            .clear{clear: both;}
        </style>

    </head>
    <body>
        <div class="content">
            <article class="news">
                <header>
                    <h1>Iniciando com CSS</h1>
                    <p>Vamos aprender o básico e essencial em CSS!</p>
                </header>

                <p>Integer vel congue tortor. Mauris pulvinar, metus in efficitur mattis, dolor augue ultricies velit, quis luctus turpis sem ut ligula. Donec blandit egestas rutrum.</p>
                <p>Nullam euismod lacus at nunc dapibus cursus. Phasellus dignissim imperdiet metus id accumsan. Curabitur sit amet nulla lacinia, tincidunt arcu id, commodo lorem. Nulla facilisi. Phasellus molestie, sem at commodo mollis, metus sem aliquet ligula, id pellentesque mauris leo non nunc</p>
                <div class="clear"></div>
            </article>

            <article class="news">
                <header>
                    <h1>Iniciando com CSS</h1>
                    <p>Vamos aprender o básico e essencial em CSS!</p>
                </header>

                <p>Integer vel congue tortor. Mauris pulvinar, metus in efficitur mattis, dolor augue ultricies velit, quis luctus turpis sem ut ligula. Donec blandit egestas rutrum.</p>
                <p>Nullam euismod lacus at nunc dapibus cursus. Phasellus dignissim imperdiet metus id accumsan. Curabitur sit amet nulla lacinia, tincidunt arcu id, commodo lorem. Nulla facilisi. Phasellus molestie, sem at commodo mollis, metus sem aliquet ligula, id pellentesque mauris leo non nunc</p>
            </article>

            <article class="news">
                <header>
                    <h1>Iniciando com CSS</h1>
                    <p>Vamos aprender o básico e essencial em CSS!</p>
                </header>

                <p>Integer vel congue tortor. Mauris pulvinar, metus in efficitur mattis, dolor augue ultricies velit, quis luctus turpis sem ut ligula. Donec blandit egestas rutrum.</p>
                <p>Nullam euismod lacus at nunc dapibus cursus. Phasellus dignissim imperdiet metus id accumsan. Curabitur sit amet nulla lacinia, tincidunt arcu id, commodo lorem. Nulla facilisi. Phasellus molestie, sem at commodo mollis, metus sem aliquet ligula, id pellentesque mauris leo non nunc</p>
            </article>

            <article class="news">
                <header>
                    <h1>Iniciando com CSS</h1>
                    <p>Vamos aprender o básico e essencial em CSS!</p>
                </header>

                <p>Integer vel congue tortor. Mauris pulvinar, metus in efficitur mattis, dolor augue ultricies velit, quis luctus turpis sem ut ligula. Donec blandit egestas rutrum.</p>
                <p>Nullam euismod lacus at nunc dapibus cursus. Phasellus dignissim imperdiet metus id accumsan. Curabitur sit amet nulla lacinia, tincidunt arcu id, commodo lorem. Nulla facilisi. Phasellus molestie, sem at commodo mollis, metus sem aliquet ligula, id pellentesque mauris leo non nunc</p>
            </article>
        </div>
    </body>
</html>
