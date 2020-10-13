@extends('layouts.app')
@section('titolo', 'chi siamo')
@section('content')
    <div class="card-group">
        @foreach ($data as $key => $student)
        <div class="card">
            <img src="{{ $student['img']}}" class="card-img-top" alt="{{ $student['nome']}}">
            <div class="card-body">
                <a href="{{ route('Student.show', ['id' => $key] )}}">
                    <h5 class="card-title">{{ $student['nome']}}</h5>
                </a>
                <p class="card-text">{{ $student['anni']}} Anni</p>
                <p class="card-text">Assunt{{ ($student['genere'] == 'f') ? 'a' : 'o' }} da {{ $student['azienda']}}</p>
                    {{-- <p class="card-text">{{ $student['descrizione']}}</p> --}}
            </div>
        </div>
        @endforeach
    </div>
@endsection
