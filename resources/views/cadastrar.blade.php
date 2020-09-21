@extends('templates.master')

@section('content')
<h1 class="text-center">
    @if(isset($book))
        Editar
    @else
        Cadastrar
    @endif
</h1>

<div class="col-8 m-auto">
    @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif

    @if(isset($book))
        <form name="editBook" id="editBook" method="POST" action="{{url("books/$book->id")}}">
            @method('PUT')
    @else
        <form name="registerBook" id="registerBook" method="POST" action="{{url('books')}}">
    @endif
            @csrf
            <div>
                <input class="form-control mb-3"
                       type="text"
                       name="title"
                       id="title"
                       placeholder="Informe o título:"
                       value="{{$book->title ?? ''}}"
                       required
                       autofocus
                >
            </div>
            <div>
                <select class="form-control idUser mb-3" name="idUser" id="idUser" required>
                    <option value="{{$book->relationUsers->id ?? ''}}">
                        {{$book->relationUsers->name ?? 'Selecione Autor'}}
                    </option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input class="form-control mb-3"
                       type="text"
                       name="pages"
                       id="pages"
                       placeholder="Informe qtd páginas:"
                       value="{{$book->pages ?? ''}}"
                       required
                >
            </div>
            <div>
                <input class="form-control mb-3"
                       type="text"
                       name="price"
                       id="price"
                       placeholder="Informe o preço:"
                       value="{{$book->price ?? ''}}"
                       required
                >
            </div>
            <div>
                <input class="btn btn-primary mb-3" 
                       type="submit"
                       value="@if(isset($book)) Alterar @else Cadastrar @endif">
            </div>
        </form>
</div>
@endsection