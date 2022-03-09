@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
<div class="container bg-dark p-5 rounded-4">
    <h1>{{ $comic->title }}</h1>
    <div class="d-flex justify-content-center">
            <img src="{{ $comic->thumb }}" alt="Cover {{$comic->title}}">
            <ul class="d-flex flex-column justify-content-between ms-5 text-start">
                <li>Serie: {{ $comic->series }}</li>
                <li>{{ $comic->type }}</li>
                <li>In vendita dal: {{date('d-m-Y', strtotime($comic->sale_date))}}</li>
                <li class="badge rounded-pill bg-success price">{{ $comic->price }}</li>
            </ul>
        </div>
        <p class="container mt-5 mb-5 text-start">{{$comic->description}}</p>
        <a href="{{ route('comics.edit', $comic->id) }}" class="more-comics">Modifica</a>
    </div>
@endsection

