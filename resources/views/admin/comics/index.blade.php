@extends('layouts.app')


@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-5">Admin Comics</h1>
        {{-- <a href="{{route('posts.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New Post
        </a> --}}
    </div>

    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
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

                    <td>
                        <a href="" title="View" class="text-decoration-none">
                            View
                        </a>
                        <a href="" title="Edit" class="text-decoration-none">
                            Edit
                        </a>
                        <a href="" title="Delete" class="text-decoration-none">
                            Delete
                        </a>

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