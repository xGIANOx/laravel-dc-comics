@extends('layouts.app')


@section('content')


<div class="container">

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <h5 class="text-uppercase text-muted my-4">Add a new Comic</h5>
    
    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert comic title" aria-describedby="nameHelper" value="{{old('title')}}" required>
        </div>
        @error('title')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Comic image here " aria-describedby="imageHelper" value="{{old('description')}}" required>
        </div>
        @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Comic image here " aria-describedby="imageHelper" value="{{old('thumb')}}" required>
        </div>
        @error('thumb')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Comic price here " aria-describedby="priceHelper" value="{{old('price')}}" required>
        </div>
        @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Comic series" aria-describedby="descriptionHelper" value="{{old('series')}}" required>
        </div>
        @error('series')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Comic sale date" aria-describedby="descriptionHelper" value="{{old('sale_date')}}" required>
        </div>
        @error('sale_date')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Comic type" aria-describedby="descriptionHelper" value="{{old('type')}}" required>
        </div>
        @error('type')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection