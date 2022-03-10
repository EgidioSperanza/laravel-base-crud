@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
{{-- @if($errors->any())
    @dump($errors->all())
@endif --}}
<form action="{{ route('comics.update', $comic->id) }}" method="POST" class="row g-3 add_form">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="Title" value="{{$comic->title}}">
        @error('title')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="helpId" placeholder="Cover link" value="{{$comic->thumb}}">
        @error('thumb')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="helpId" placeholder="Price" value="{{$comic->price}}">
        @error('price')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="helpId" placeholder="Series" value="{{$comic->series}}">
        @error('series')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">In vendita dal</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Sale date start" value="{{$comic->sale_date}}">
        @error('sale_date')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Comics</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="helpId" placeholder="Comic Book | Graphic Novel" value="{{$comic->type}}">
        @error('type')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="helpId" placeholder="Description">{{$comic->description}}
        </textarea>
        @error('description')
        <div class="invalid-feedback bg-warning p-2">{{$message}}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-secondary me-3"><a class="btn-link" href="{{ route('comics.show', $comic->id) }}">Annulla Modifica</a></button>
        <button class="btn btn-success me-3" type="submit">Modifica Record</button>
    </form>
    @include ('partials.destroybtn')
</div>
@endsection
