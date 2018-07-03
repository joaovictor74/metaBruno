<nav id="menu">
    <ul class="links">
        <li><a href="{{route('site.index')}}">Início</a></li>
        <li>
            <a>Informações</a>
            <dl class="links">
                <dd><a href="{{route('site.institucional')}}" style="color:aliceblue">Institucional</a></dd>
                <dd><a href="{{route('site.grade')}}" style="color:aliceblue">Grade</a></dd>
                <dd><a href="{{route('site.extensao')}}" style="color:aliceblue">Projetos de extensão</a></dd>
                <dd><a href="{{route('site.eventos')}}" style="color:aliceblue">Eventos</a></dd>
                
            </dl>
        </li>
        <li><a>Portais</a>
            <dl class="links" >
                <dd><a href="{{route('site.aluno')}}" style="color:aliceblue">Aluno</a></dd>
                <dd><a href="{{route('site.prof')}}" style="color:aliceblue">Professor</a></dd>
                <dd><a href="{{route('admin.login')}}" style="color:aliceblue">Administrativo</a></dd>
            </dl>
        </li>
        <li><a href="http://sistemas.facape.br:8080/vestibular/home.do" target="_blank">Vestibular</a></li>
    </ul>
</nav>