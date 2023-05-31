@extends('layouts.app')


@section('content')

<div class="container py-5">

    
        <div class="d-flex gap-5">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="single_comic_img">
       
        
            <div class=" border rounded p-4 bg-dark text-white">
                <div class="d-flex flex-column">
                    <h1>{{$comic->title}}</h1>
                    <div class="bg-white text-black rounded p-5 mt-4">
                        <strong>Description:</strong>    
                        <p class="pt-3">{{$comic->description}}</p>

                        <div class="table-responsive">
                            <table class="table table-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Price</th>
                                        <th scope="col">Series</th>
                                        <th scope="col">Sale date</th>
                                        <th scope="col">Type</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{$comic->price}}</td>
                                        <td>{{$comic->series}}</td>
                                        <td>{{$comic->sale_date}}</td>
                                        <td>{{$comic->type}}</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                      
                        
                    </div>
                    <div class="d-flex justify-content-end gap-3 mt-2">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('comics.index')}}" title="Index" class="text-decoration-none">
                                Back to index
                            </a>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('comics.edit', $comic->id)}}" title="View" class="text-decoration-none">
                                Edit
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            
        </div>
    
        
   
    

</div>


@endsection