@extends('layout')
@section('title')Отзывы@endsection

@section('main_content')
    <h1>Ваш отзыв</h1>
    @if($errors->any())
        <div class="allert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


   <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите Email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Введите текст" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить отзыв</button>
    </form>
    <h1>Все отзывы</h1>
    @foreach($reviews as $el)
    <div class="alert alert-warning bg-dark text-white">
        <ul>
            <li>
                <b>{{$el->email}}</b>
                <h3>{{$el->subject}}</h3>
                <p>{{$el->message}}</p>
            </li>
        </ul>
    </div>
    @endforeach
@endsection
