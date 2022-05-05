@extends('layouts.base')

@section('title', 'comic')

@section('main-content')
<div class="relative">
    <div class="jumbotron">

        <img class="comic-item-img" src= "{{ $comic['thumb'] }}">
        <p class="gallery">view gallery</p>
        <p class="comic-book">comic-book</p>
    </div>

    <div class="top-main relative">

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




