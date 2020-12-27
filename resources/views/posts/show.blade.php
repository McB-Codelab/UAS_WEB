@extends('layouts.app')

@section('content')
<div class="m-3">
    <h1> {{ $post->nama }}</h1>
    <div>
        <p>"{{ $post->pesan }}"</p>
        <small>Hubungi {{ $post->nama }} di {{ $post->no_hp }}</small>
        <small>(Ditulis pada {{$post->created_at}})</small>
        <hr>
    </div>
    <a href="/posts" class="btn btn-dark">Kembali</a>
    <div class="text-right">
    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    </div>
</div>
@endsection