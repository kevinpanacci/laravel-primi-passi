@php
    $prodotti = config('products');
    $prodotto = $prodotti[$id];
    $nextid = ($id == (count($prodotti)) -1) ? 0 : $id + 1;
    $previd = ($id == 0) ? (count($prodotti) -1) : $id - 1;
@endphp

@extends('layouts.layout')


@section('main')
    <div class="prodotto">
        <a id="prev" href="{{$previd}}" > < </a>
        <div class="product-cta">
            <div class="prod-top" style="background-image:url('{{$prodotto['src-h']}}')" >
                <h3>{!! $prodotto['titolo'] !!}</h3>
                {{-- <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}"> --}}
            </div>
            <div class="prod-bot" style="background-image:url('{{$prodotto['src-p']}}')" >

            </div>
            <div class="sky">
                <p>{!! $prodotto['descrizione'] !!}</p>
            </div>
        </div>
        <a id="next" href="{{$nextid}}"> > </a>
    </div>
@endsection
