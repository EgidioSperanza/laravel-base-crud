@extends('layouts.default')

@section('pageTitle', 'Comics')

@section('main')
<form action="{{ route('comics.store') }}" method="post" class="row g-3 add_form">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId" placeholder="Cover link">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="Series">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">In vendita dal</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="Sale date start">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Comics</label>
        <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Comic Book | Graphic Novel">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="Description"></textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-secondary me-3" type="reset">Indietro</button>
        <button class="btn btn-success" type="submit">Crea Record</button>
      </div></form>
@endsection
