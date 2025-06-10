@extends('layouts.app')

@section('title', 'Halaman Blog')

@section('content')
    <div class="">
        <div>
            <h1>Halaman Blog</h1>
        </div>

        <div>
            <ul>
                <li class="hover:text-blue-600">
                    <a href="{{ route('article1') }}">Article 1</a>
                </li>
                <li class="hover:text-blue-600">
                    <a href="{{ route('article2') }}">Article 2</a>
                </li>
            </ul>
        </div>

        <div>
            Ini halaman Blog
        </div>
    </div>
@endsection