<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            p{color: blue !important;}
            .artigo p{background: red; color: #fff;}
            
            .p{color: white;}
        </style>

    </head>
    <body>

        <!--    
        1, 0, 0, 0
        Inline, ID, Classes, Elementos

        0001 Elementos
        0010 Classes
        -->

        <p class="p" id="p" style="color: aqua">Especificidade</p>

        <article class="artigo color_blue">
            <header>
                <h1>Iniciando com CSS</h1>
                <p class="tagline">Vamos aprender o básico e essencial em CSS!</p>
            </header>

            <p>Integer vel congue tortor. Mauris pulvinar, metus in efficitur mattis, dolor augue ultricies velit, quis luctus turpis sem ut ligula. Donec blandit egestas rutrum.</p>
            <p>Nullam euismod lacus at nunc dapibus cursus. Phasellus dignissim imperdiet metus id accumsan. Curabitur sit amet nulla lacinia, tincidunt arcu id, commodo lorem. Nulla facilisi. Phasellus molestie, sem at commodo mollis, metus sem aliquet ligula, id pellentesque mauris leo non nunc</p>
        </article>

    </body>
</html>
