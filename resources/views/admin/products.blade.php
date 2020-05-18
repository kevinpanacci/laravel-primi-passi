@php
    $database = config('products');
    // $database = json_decode($data, true); // Metodo per decodificare il json
@endphp

@extends('layouts.admin')

@section('titolo')
    prodotti
@endsection

@section('main')
    <table>
        <thead>
            <tr>
                <th>Nome Prodotto</th>
                <th>Descrizione</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($database as $product)
            <tr>
                <td>{!! $product['titolo'] !!}</td>
                <td>{!! $product['descrizione'] !!}</td>
                <td>{!! $product['tipo'] !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
