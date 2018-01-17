@extends('layouts.master')

@section('title', 'Stick Media - The Business Of Play')

@section('content')
    <div class="parallax-home">
        <div class="container-right">
        <div class="title-banner pull-right">
            <h1 class="no-margin">The Business of Play </h1>
            <p class="description-banner">Led by strategy. Fueled by passion. Obsessed with innovation.</p>
            <div id="get-started" class="description-banner">
                <a href="#h2-title" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Get Started
                </a>
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid home-b2">
        <div class="container">
            <h2 id="h2-title" class="align-center">Play is serious business</h2>
            <div class="row">
                <div class="col-md-5 col-sm-4 align-center">
                    <img class="img100p" src="{{ asset('/public/images/home-pic1.jpg') }}">
                </div>
                <div class="col-md-7 col-sm-8">
                    <p class="mobile-justify mobile-center description-banner">Something magical happens when we can emotionally connect products with consumers. They evolve from simply being purchase-based interactions listed in a headache-inducing spreadsheet to advocacy-based brand champions for your products all across the globe. Knowing this, all of our experts at StickMedia work tirelessly to ensure consumers love your company as much as you do.</p>
                </div>
            </div>
        </div>
    </div>

    

    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-generic" data-slide-to="1"></li>
            <li data-target="#carousel-generic" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="parallax2-home">
                    <h2 class="align-center"><span>STICK TO CORE VALUES.</span></h2>
                    <div class="container-left">
                    <div class="home-b1 pull-left">
                        <h3 class="no-margin">EVERYONE LEADS. EVERYONE GETS OUT OF THEIR OWN WAY.</h3>
                        <p class="description-banner">We believe that regardless of an org chart or being a specific DRI, everyone on our team will display leadership qualities. Every team member sets the tone for leadership by setting a good example.</p>
                    </div></div>
                </div>
            </div>
            <div class="item">
                <div class="parallax3-home">
                    <h2 class="align-center"><span>STICK TO CORE VALUES.</span></h2>
                    <div class="container-right">
                    <div class="home-b1 pull-right">
                        <h3 class="no-margin">BUILD SOMETHING AWESOME. NOW, BREAK IT.</h3>
                        <p class="description-banner">Bring your awesome ideas to life, then break them. The only way to really improve is to find holes and explore weaknesses so we can fix them before they go into the market. Failure is not to be feared, but learned from.</p>
                    </div></div>
                </div>
            </div>
            <div class="item">
                <div class="parallax4-home">
                    <h2 class="align-center"><span>STICK TO CORE VALUES.</span></h2>
                    <div class="container-left">
                    <div class="home-b1 pull-left">
                        <h3 class="no-margin">NO ONE SUCCEEDS ALONE.</h3>
                        <p class="description-banner">Collaboration across disciplines is not only encouraged, but expected. Our team of multi-disciplined innovators have years of experience in Fortune 500 companies from all around the world. We respect everyone's experience and always want our passionate professionals to achieve more by working together.</p>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
@endsection