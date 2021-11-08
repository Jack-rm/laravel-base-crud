@extends('layouts.main')

@section('title', 'Edit comic')

@section('main-section-id', 'comic-edit')

@section('main-section-classes', 'comic-wrapper p-4 mt-4')

@section('main-content')
    @include('partials.update')
@endsection