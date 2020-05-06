
@php
    $data = config('products');
    $cards = json_decode($data, true); // Metodo per decodificare il json

    //Inizializzo array vuoti per dividere la tipologia
    $lunghe = [];
    $corte = [];
    $cortissime = [];
    // Popolo i miei array
    foreach ($cards as $key => $card) {
        if ($card['tipo'] == 'lunga') {
            $lunghe[$key] = $card;
        } elseif ($card['tipo'] == 'corta') {
            $corte[$key] = $card;
        } elseif ($card['tipo'] == 'cortissima') {
            $cortissime[$key] = $card;
        }
    }
@endphp

@extends('layouts.layout')
@section('main')
    @include('partials.main')
@endsection
@section('titolo')
    Prodotti
@endsection
