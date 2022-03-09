@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
<form action="{{ route('comics.update', $comic->id) }}" method="POST" class="row g-3 add_form">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId" placeholder="Cover link" value="{{$comic->thumb}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="Series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">In vendita dal</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Sale date start" value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Comics</label>
        <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Comic Book | Graphic Novel" value="{{$comic->type}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Description">{{$comic->description}}
        </textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-secondary me-3" type="reset">Indietro</button>
        <button class="btn btn-success" type="submit">Modifica Record</button>
      </div></form>
@endsection
