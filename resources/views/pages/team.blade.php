@extends('layouts.master')

@section('title', 'Stick Media - The Business Of Play')

@section('content')
    <div class="parallax-team-banner"> 
        <div class="container-left">
        <div class="title-banner pull-left">
            <h1 class="no-margin">STICK TOGETHER</h1>
            <p class="description-banner">We are stronger united than divided.</p>
        </div></div>
    </div>
 
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-generic" data-slide-to="1"></li>
                <li data-target="#carousel-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="container team-div align-center">
                        <img class="person" src="{{ asset('/public/images/man.png') }}"><br>
                        <a href="https://www.facebook.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/facebook.png') }}"></a>
                        <a href="https://www.twitter.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/twitter.png') }}"></a>
                        <a href="https://plus.google.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/google.png') }}"></a>
                        <h3 class="no-margin">JOHN STEVENS</h3>
                        <p class="description-banner">Accountant</p>
                    </div>
                </div>
                <div class="item">
                    <div class="container team-div align-center">
                        <img class="person" src="{{ asset('/public/images/man.png') }}"><br>
                        <a href="https://www.facebook.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/facebook.png') }}"></a>
                        <a href="https://www.twitter.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/twitter.png') }}"></a>
                        <a href="https://plus.google.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/google.png') }}"></a>
                        <h3 class="no-margin">BILLY RICHARDS</h3>
                        <p class="description-banner">Developer</p>
                    </div>
                </div>
                <div class="item">
                    <div class="container team-div align-center">
                        <img class="person" src="{{ asset('/public/images/woman.png') }}"><br>
                        <a href="https://www.facebook.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/facebook.png') }}"></a>
                        <a href="https://www.twitter.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/twitter.png') }}"></a>
                        <a href="https://plus.google.com" target="_blank"><img class="social" src="{{ asset('/public/images/social/google.png') }}"></a>
                        <h3 class="no-margin">JANE DOE</h3>
                        <p class="description-banner">General Manager</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>

@endsection