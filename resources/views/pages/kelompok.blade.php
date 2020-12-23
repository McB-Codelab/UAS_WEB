@extends('layouts.app')

@section('content')
    <h1>_</h1>
    <hr>
    <h1>{{$title}}</h1>
    <hr>
    <ul class="list-group">
        @if(count($kelompok) > 0)
            @foreach ($kelompok as $nama)
                <li class="list-group-item">{{$nama}}</li>
            @endforeach
        @endif
    </ul>
@endsection