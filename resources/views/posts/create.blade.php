@extends('layouts.app')

@section('content')
<div class="m-3">
        <h1>Daftar</h1>
        <hr>
        {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('nama', 'Nama')}}
                {{Form::text('nama', '',['class' => 'form-control', 'placeholder' => 'Nama'])}}
            </div>
            <div class="form-group">
                {{Form::label('no_hp', 'Nomor Hp')}}
                {{Form::text('no_hp', '',['class' => 'form-control', 'placeholder' => '08xxxxxxxxx'])}}
            </div>
            <div class="form-group">
                {{Form::label('pesan', 'Pesan')}}
                {{Form::textarea('pesan', '',['class' => 'form-control', 'placeholder' => 'Tuliskan pesanmu untuk sang pengantin!'])}}
            </div>
            {{Form::submit('Kirim', ['class' => 'btn btn-dark'])}}
        {!! Form::close() !!}
</div>
@endsection