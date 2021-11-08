@extends('layouts.main')

@section('title', 'Home')

@section('main-section-id', 'comics-index')

@section('cdn-section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
@endsection

@section('main-content')
<div class="table-wrapper p-5">
        <div class="table-header d-flex align-items-center justify-content-between mb-4">
            <h1 class="card-title mb-3">Available Now!</h1>
            <form method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find Comic" name="search" value={{$search}}>
                    <button class="btn btn-secondary" type="submit">Search</button>
                </div>
            </form> 
            <a href="{{ route('comic.create') }}" class="btn btn-danger ms-2">New Comic</a>

        </div>

        <table class="table p-5">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td> <a href="{{ route('comic.show', $comic->id)}} "> {{$comic->title}} </a></th>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}} $</td>
                        <td>{{$comic->sale_date}}</td>
                        <td><a href="{{ route('comic.edit', $comic->id) }}" class="btn-sm"><i class="fas fa-edit"></i></a></td>
                    </tr>    
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No comics available</td>
                    </tr>
                @endforelse
                
            </tbody>

        </table>
    </div>
@endsection