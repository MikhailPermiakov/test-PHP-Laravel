@extends ('/layouts/layout')

@section('title')
Записи
@endsection

@section('content')
<div class="container">
    <h1>Records</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/records/check">
        @csrf
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" id="name" name="name" placeholder="Введите имя" class="form-control"><br>
        <textarea id="message" name="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">отправить</button>
    </form>
</div>
@endsection