@extends('layouts.app')

@section('content')
<div class="m-3">
    <h1>{{$title}}</h1>
    <hr>
    <ul class="list-group">
        @if(count($kelompok) > 0)
            @foreach ($kelompok as $nama)
                <li class="list-group-item">{{$nama}}</li>
            @endforeach
        @endif
    </ul>
</div>
@endsection