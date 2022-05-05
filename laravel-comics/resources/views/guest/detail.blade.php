@extends('layouts.base')

@section('title', 'comic')

@section('main-content')
<div class="relative">
    <div class="jumbotron">

    </div>

    <div class="top-main relative">
        <img src= "{ $comicElement['thumb'] }">
    </div>

        <div class="comic-item">
            <h1>{{ $comic['title'] }}</h1>
        </div>
            <div class="comic-info">
                <p>U.S. price:</p>
                <p>Available</p>
                <p>Check Availability</p>
            </div>
            <img>


    </div>
@endsection




