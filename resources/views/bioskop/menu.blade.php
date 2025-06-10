@extends('layouts.app')

@section('title', 'Absolute Cinema')

@section('content')
    <section class="text-white">
        <div class="items-center">
            <div class="border-b-2 border-gray-500">
                <div class="mx-10">
                    <h1 class="underline font-black text-xl">In Theatres</h1>
                </div>

                @include('bioskop.listFilms')
            </div>
            
            <div class="mx-10 my-6">
                <h1 class="underline font-black text-xl">Select a Cinema</h1>

                @include('bioskop.listCinemas')
            </div>
        </div>
    </section>
@endsection