@extends('principal')

@section('content')

<div class="container">
    <table class="table table-striped text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descricao</th>
            <th colspan="2" scope="col">Ações</th>
        </tr>
        @foreach ($messages as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->titulo}}</td>
            <td>{{$message->descricao}}</td>
            <td><a href="/messages/edit/{{$message->id}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="/messages/delete/{{$message->id}}" method="post">
                    <input type="hidden" name="_token" value=" {{ csrf_token() }}" />
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
<a href="/messages/create" class="btn btn-success">Adicionar</a>
</div>
    
@endsection
