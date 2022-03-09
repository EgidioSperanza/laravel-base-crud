@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
<div class="container show bg-dark p-5">
    <h1>{{ $comic->title }}</h1>
    <div class="d-flex justify-content-center pt-5">
        <img src="{{ $comic->thumb }}" alt="Cover {{$comic->title}}">
        <ul class="d-flex flex-column justify-content-between ms-5 text-start">
            <li>Serie: {{ $comic->series }}</li>
            <li>{{ $comic->type }}</li>
            <li>In vendita dal: {{date('d-m-Y', strtotime($comic->sale_date))}}</li>
            <li class="badge rounded-pill bg-success price">{{ $comic->price }}</li>
        </ul>
    </div>
    <p class="container mt-5 mb-5 text-start">{{$comic->description}}</p>
    <div class="d-flex justify-content-end">
        @include('partials.return', ['routeTarget'=>'comics.index'])
        <button class="btn btn-primary me-3"><a class="btn-link" href="{{ route('comics.edit', $comic->id) }}">Modifica</a></button>
        @include('partials.destroybtn')
    </div>
</div>
@endsection
