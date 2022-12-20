@extends('layouts.app')

@section('content')
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
 
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">
 
    <label for="description">Descrizione</label>
    <input type="text" name="description" id="description">
    
    <label for="type">Tipo</label>
    <input type="text" name="type" id="type">
    
    <label for="thumb">Immagine</label>
    <input type="text" name="thumb" id="thumb">
    
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price">
    
    <label for="series">Series</label>
    <input type="text" name="series" id="series">
    
    <label for="sale_date">Sale Date</label>
    <input type="text" name="sale_date" id="sale_date">
    
    <label for="Type">Type</label>
    <input type="text" name="Type" id="Type">
 
    <input type="submit" value="Invia">
 </form>
 
@endsection