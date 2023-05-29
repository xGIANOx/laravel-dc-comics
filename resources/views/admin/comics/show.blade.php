@extends('layouts.app')


@section('content')

<div class="container py-5">
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
    <h1>{{$comic->title}}</h1>
    <div>
        <p>{{$comic->description}}</p>
    </div>

</div>


@endsection