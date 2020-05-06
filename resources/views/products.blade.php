
@php
    $data = config('products');
    $database = json_decode($data, true); // Metodo per decodificare il json

    //Inizializzo array vuoti per dividere la tipologia
    $lunghe = [];
    $corte = [];
    $cortissime = [];
    // Popolo i miei array
    foreach ($database as $key => $card) {
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
@section('mainContent')
    @include('partials.main')
@endsection
@section('titolo')
    Prodotti
@endsection
@section('scripts')
    {{-- scriptjs --}}
@endsection
