@extends('templates.master')

@section('content')
<h1 class="text-center">Bem vindo</h1>

<div class="text-center mt-3 mb-4">
    <a href='{{url("books/create")}}'>
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>
<div class="col-8 m-auto">
    @csrf
    <table class="table table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Qt. Páginas</th>
                <th scope="col">Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($book as $books)
            <?php
            $user = $books->find($books->id)->relationUsers;
            ?>
            <tr>
                <th scope="row">{{$books->id}}</th>
                <th>{{$books->title}}</th>
                <td>{{$user->name}}</td>
                <td>{{$books->pages}}</td>
                <td>{{$books->price}}</td>
                <td class="btn-group">
                    <div>
                        <a href='{{url("books/$books->id")}}'>
                           <button class="btn btn-dark mr-1" role="button">Visualizar</button>
                        </a>
                    </div>    
                    <div>
                        <a href='{{url("books/$books->id/edit")}}'>
                            <button class="btn btn-primary mr-1" role="button">Editar</button>
                        </a>
                    </div>
                    <div>
                        <a href='{{url("books/$books->id")}}'>
                            <button class="btn btn-danger deleteBook" role="button">Deletar</button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$book->links()}}
</div>
@endsection