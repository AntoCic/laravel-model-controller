@extends('layouts.app')

@section('title')Home @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Home</h1>
        </div>
    </div>
    
    <div class="row row-cols-3 text-white">
        @foreach ($movies as $movie)
            <div class="col py-3">
                <div class="bg-dark text-center rounded h-100 p-3">
                    <h2>{{ $movie->title }}</h2>
                    <p>{{ $movie->original_title }}</p>
                    <p class="fst-italic">{{ $movie->nationality }}</p>
                    <p class="opacity-50">{{ $movie->date }}</p>
                    <span class="badge text-bg-warning">{{ $movie->vote }}</span>
                   
                </div>
            </div> 
        @endforeach
    </div>
</div>
@endsection
