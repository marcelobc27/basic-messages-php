@extends('principal')
@section('content')
<form action="/messages" method="delete">
    <input type="hidden" name="_token" value=" {{ csrf_token() }}" />

    <div class="container">
        <div class="form-group mt-3">
            <label>Tituto</label>
            <input name="titulo" class="form-control"/>
        </div>
        <div class="form-group mt-3">
            <label>Mensagem</label>
            <textarea name="mensagem" class="form-control" rows="5"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div> 
</form>
@endsection