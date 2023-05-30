@extends('layouts.app')


@section('content')


<div class="container">
    <h5 class="text-uppercase text-muted my-4">Edit {{$comic->title}}</h5>
    
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Insert comic title" aria-describedby="nameHelper" value="{{$comic->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Comic description here" value="{{$comic->description}}"  aria-describedby="imageHelper">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic image here " value="{{$comic->thumb}}" aria-describedby="imageHelper">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Comic price here " aria-describedby="priceHelper" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Comic series" aria-describedby="descriptionHelper" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale date" aria-describedby="descriptionHelper" value="{{$comic->sale_date}}">
        </div><div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Comic type" aria-describedby="descriptionHelper" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection