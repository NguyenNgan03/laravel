@extends('layouts.client')

@section('title')
   {{ $title }}
@endsection

@section('sidebar')
    @parent
    <h3>Home Sidebar</h3>
@endsection
@section('content')
    <h1>Home Page</h1>
    <button type="button" class="show">Show</button>
@endsection

@section('css')
    <style>
        header{
            background: blue;
            color: #333;
        }
    </style>
@endsection

@section('js')
    <script>
        document.querySelector('.show').onclick = function(){
        alert('Successful!');
    }
    </script>
@endsection

