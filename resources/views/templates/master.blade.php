<!DOCYTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        
        <title>Painel do administrador</title>
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        @yield('css-view')

    </head>
    <body>
        @include ('templates.menu-lateral')
        <section id='view-conteudo'>
            @yield('conteudo-view')
        </section>
            @yield('js-view')

    </body>
</html>