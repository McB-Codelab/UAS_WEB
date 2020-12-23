<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <title>{{config('app.name', 'McBLaB')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
            @include('inc.messages')
        </div>
    </body>
</html>