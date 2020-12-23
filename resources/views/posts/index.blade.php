@extends('layouts.app')

@section('content')
        <h1>_</h1>
        <hr>
        <h1>Daftar Buku Tamu</h1>
        <hr>
        <a href="/posts/create" class="btn btn-dark mb-3">Daftar</a>
        @if(count($posts) > 1)
            @foreach ($posts as $object)
                <div class="card card-body">
                    <h3><a href="/posts/{{$object->id}}">"{{ $object->pesan }}" -{{ $object->nama }} </a></h3>
                    <small>Ditulis pada {{$object->created_at}}</small>
                </div>
            @endforeach
        @else
            <p>Belum ada tamu.</p>
        @endif
@endsection