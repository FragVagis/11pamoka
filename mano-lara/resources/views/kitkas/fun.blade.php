@extends('home')

@section('fun')

    @include('kitkas.bu')

    @if($abc == 'keturi')

    <h1>Labai gerai</h1>

    @else

    <h1>Nu nelabai gerai</h1>

    @endif
    @forelse($mas as $value)
    <h2>{{$value}}</h2>
        
    @empty
        
    @endforelse


    @foreach($mas as $value)
    <h2>{{$value}}</h2>
    @endforeach

@endsection

@section('title')
superfun

@endsection

