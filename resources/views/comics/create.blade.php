@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
{{-- @if($errors->any())
    @dump($errors->all())
@endif --}}
<h1>Aggiungi un fumetto</h1>
<form action="{{ route('comics.store') }}" method="POST" class="row g-3 add_form">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="Title" value="{{old('title')}}">
        @error('title')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="helpId" placeholder="Cover link" value="{{old('thumb')}}">
        @error('thumb')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="helpId" placeholder="Price" value="{{old('price')}}">
        @error('price')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="helpId" placeholder="Series" value="{{old('series')}}">
        @error('series')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">In vendita dal</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Sale date start" value="{{old('sale_date')}}">
        @error('sale_date')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Comics</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="helpId" placeholder="Comic Book | Graphic Novel" value="{{old('type')}}">
        @error('type')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="helpId" placeholder="Description">{{old('description')}}</textarea>
        @error('description')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-end">
        @include('partials.return', ['routeTarget'=>'comics.index'])
        <button class="btn btn-secondary me-3" type="reset">Indietro</button>
        <button class="btn btn-success" type="submit">Crea Record</button>
      </div></form>
@endsection
