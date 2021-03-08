<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body >



    @extends('plantilla')

       @section('t')
       		Funciona
       @endsection



       @section('c')
       		{{$c}}
       @endsection

      
    </body>
</html>
