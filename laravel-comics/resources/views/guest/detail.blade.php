@extends('layouts.base')

@section('title', 'comic')

@section('main-content')
    <div class="relative">
        <div class="jumbotron">
            <img class="comic-item-img" src="{{ $comic['thumb'] }}">
            <p class="gallery">view gallery</p>
            <p class="comic-book">comic book</p>
        </div>
    </div>
    <div class="top-main "></div>
    <div class="container-detail clearfix">
        <div class="comic-item">
            <h1>{{ $comic['title'] }}</h1>
        </div>
        <div class="comic-info">
            <p class="uno">U.S. price:</p>
            <p class="price">{{ $comic['price'] }}</p>
            <p class="due">Available</p>
        </div>
        <div class="comic-info-b">
            <p class="check">Check Availibility</p>
        </div>
        <div class="comic-adv">
            <p>Advertisement</p>
            <img src="../images/adv.jpg" alt="">
        </div>
        <p class="description">{{ $comic['description'] }}
    </div>
    </div>
    @include('partials.info')
@endsection
