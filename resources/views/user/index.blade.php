@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection

@section('conteudo-view')
    <h1 id= "tituloaluno" >Cadastro de Aluno</h1>
    {!!Form::open (['method'=> 'post','class' => 'form-padrao'])!!}
        @include('templates.formulario.input',['label'=>'Matricula','input' => 'matricula','attributes' => ['placeholder'=>'Matricula']])
        @include('templates.formulario.input',['label'=>'Nome do Aluno','input' => 'nomeALuno','attributes' => ['placeholder'=>'Nome do Aluno']])
        @include('templates.formulario.password',['label'=>'Senha','input' => 'password','attributes' => ['placeholder'=>'Senha']])
        @include('templates.formulario.input',['label'=>'Email do aluno','input' => 'email','attributes' => ['placeholder'=>'Email do Aluno']])
        @include('templates.formulario.submit',['input'=>'Cadastrar'])
    {!!Form::close()!!}
@endsection