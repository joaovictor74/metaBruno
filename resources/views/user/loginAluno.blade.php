<!DOCYTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <title>Login</title>
</head>
    <body>
        <section id="conteudo-view" class="Login">
            <h1>Login do Aluno</h1>
            
            {!! Form::open(["route"=>'user.login_Aluno','method'=>'post']) !!}
                <p></p>

                <label>
                    {!!Form::text('username',null,['class'=>'input','placeholder'=>'Matricula'])!!}
                </label>

                <label>
                    {!!Form::password('password',['placeholder'=>'Senha'])!!}
                </label>
                {!!Form::submit('Entrar')!!}
            {!! form::close() !!}
            
            
                <form class="" action="" method="post">

                </form>
        </section>

        
    </body>
</html>