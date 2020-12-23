@extends('layouts.app')

@section('content')
    <h1>_</h1>
    <h1>_</h1>
    <h1> {{ $post->nama }}</h1>
    <div>
        <p>"{{ $post->pesan }}"</p>
        <small>Hubungi {{ $post->nama }} di {{ $post->no_hp }}</small>
        <small>(Ditulis pada {{$post->created_at}})</small>
        <hr>
    </div>
    <a href="/posts" class="btn btn-dark">Kembali</a>
@endsection