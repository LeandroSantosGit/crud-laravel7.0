@extends('templates.master')

@section('content')
<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">
    <?php
        $user = $book->find($book->id)->relationUsers;
    ?>
    Título: {{$book->title}}<br>
    Autor: {{$user->name}}<br>
    Páginas: {{$book->pages}}<br>
    Preço: {{$book->price}}<br>
    Email do autor: {{$user->email}}
</div>
@endsection