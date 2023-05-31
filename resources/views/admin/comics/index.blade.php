@extends('layouts.app')


@section('content')

<div class="container mt-5">
    @if (session('message'))
    <div class="alert alert-primary" role="alert">
        <strong>{{session('message')}}</strong>
    </div>

    @endif
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-5">Admin Comics</h1>
        <a href="{{route('comics.create')}}" class="btn btn-dark d-block">
            + New Comic
         </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumb</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th>Actions</th>

                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($comics as $single_comic)
                <tr class="table-primary">
                    <td scope="row">{{$single_comic->id}}</td>
                    <td scope="row">{{$single_comic->title}}</td>
                    <td><img height="100" src="{{$single_comic->thumb}}" alt="{{$single_comic->title}}"></td>
                    <td>{{$single_comic->price}}</td>
                    <td>{{$single_comic->series}}</td>
                    <td>{{$single_comic->sale_date}}</td>
                    <td>{{$single_comic->type}}</td>

                    <td class="d-flex flex-column py-4 gap-2">
                        
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('comics.show', $single_comic->id)}}" title="View" class="text-decoration-none">
                                View
                            </a>
                        </button>
                        

                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('comics.edit', $single_comic->id )}}" title="Edit" class="text-decoration-none">
                                Edit
                            </a>
                        </button>
                        
                        <form action="{{route('comics.destroy', $single_comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#modal-{{$single_comic->id}}">
                                Delete
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modal-{{$single_comic->id}}" tabindex="-1" aria-labelledby="modal-{{$single_comic->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modal-{{$single_comic->title}}">Are you sure you want to delete {{$single_comic->title}}?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    The action is permanet!
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>

                    </td>

                </tr>
                @empty
                <tr scope="row">
                    <td>No records in the db yet.</td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>



</div>


@endsection