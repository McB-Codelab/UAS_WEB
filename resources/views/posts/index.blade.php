@extends('layouts.app')

@section('content') 
<div class="m-3">
        <div class="text-center w3-container w3-content w3-center w3-padding-64" id="band">
            <h2 class="w3-wide">WEDDING PARTY</h2>
            <p class="w3-center"><i>RAISA & HAMISH</i></p>
            <p class="w3-center"><i>20 DESEMBER 2020</i></p>
            <p class="w3-center"><i>MANADO BEACH HOTEL</i></p>
          </div>
        <hr>
        <h1>Daftar Buku Tamu</h1>
        @if(count($posts) > 1)
            @foreach ($posts as $object)
                <div class="card card-body mb-2">
                    <h3>"{{ $object->pesan }}" -{{ $object->nama }}</h3>
                    <small>Ditulis pada {{$object->created_at}}</small>
                    
                    @can('isAdmin')
                    <a href="/posts/{{$object->id}}" class="btn pull-right btn-light mb-3">Lihat</a>
                    @endcan
                </div>
            @endforeach
        @else
            <p>Belum ada tamu.</p>
        @endif
        @can ('isUser')
            <div class="text-center">
                <a href="/posts/create" class="btn pull-right btn-dark mb-3">Tulis Pesan</a>
            </div>
        @endcan
</div>
@endsection