@extends('layouts.base')

@section('title', 'Home')

@section('main-content')
<div class="relative">
    <div class="jumbotron">
    <h2>current series</h2>
    </div>
    <div class="comic-list">
        <div class="container main-comics">
            <div class="comic-list">
                <div>
                    @foreach($comics as $index => $comicElement)
                        <div class="comic-element">
                            <img src="{{ $comicElement['thumb'] }}" alt="{{ $comicElement['title'] }}">
                            <a href="{{ route("comic-detail-page", ['index' => $index ]) }}">
                                <h4>{{ $comicElement['title'] }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
