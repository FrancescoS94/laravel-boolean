@extends('layouts.app')
@section('titolo', 'chi siamo')
@section('content')
    <div class="container card-group c-show">
        <div class="card">
            <img src="{{ $student->img }}" class="card-img-top" alt="{{ $student->nome }}">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nome }}</h5>
                <p class="card-text">{{ $student->anni }} Anni</p>
                <p class="card-text">Assunt{{ ($student->genere == 'f') ? 'a' : 'o' }} da {{ $student->azienda }}</p>
                <p class="card-text">{{ $student->descrizione }}</p>

            {{-- <img src="{{ $student['img']}}" class="card-img-top" alt="{{ $student['nome']}}">
            <div class="card-body">
                <h5 class="card-title">{{ $student['nome']}}</h5>
                <p class="card-text">{{ $student['anni']}} Anni</p>
                <p class="card-text">Assunt{{ ($student['genere'] == 'f') ? 'a' : 'o' }} da {{ $student['azienda']}}</p>
                <p class="card-text">{{ $student['descrizione']}}</p> --}}
            </div>
        </div>
    </div>
@endsection
