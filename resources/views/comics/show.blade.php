@extends('layout.app')
@section('title')
Show
@endsection

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="details text-white">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
            <p>Price: {{$comic->price}}</p>
        </div>
    </div>
</div>
@endsection