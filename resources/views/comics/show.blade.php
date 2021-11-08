@extends('layouts.main')

@section('title', $comic->title)

@section('main-section-id', 'comic-show')

@section('main-content')
    <div class="comic-wrapper p-5">
        <h1 class="card-title mb-3"> {{ $comic->title }} </h1>
        <hr>
        <div class="card-body row">
            <div class="col-4">
                <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}} Cover">
            </div>
            <div class="col-8">
                <h2><span>Series:</span> {{$comic->series}}</h2>
                <h3><span>Price:</span> {{$comic->price}}$</h3>
                <h4><span>Sale Date:</span> {{$comic->sale_date}}</h4>
                <h5>" {{$comic->description}} "</h5>
            </div>

        </div>
    </div>
@endsection