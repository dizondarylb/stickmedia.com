@extends('layouts.master')

@section('title', 'Career - Stick Media')

@section('content')
    <div class="parallax-career-banner"> 
        <div class="container-right">
        <div class="title-banner pull-right">
            <h1 class="no-margin">STICK WITH US</h1>
            <p class="description-banner">We want your passion and expertise on our team.</p>
        </div></div>
    </div>
    
    <div class="container align-center pad-b-20">
        <h2>CAREERS</h2>
        <p>If you’re ready to challenge yourself, advance in your career and become part of our highly driven team - we want to meet you!</p>
        <p>Our <a href="{{ route('apply') }}"><strong>online application process</strong></a> is completely secure and confidential. Feel free to <a href="{{ route('apply') }}"><strong>submit your résumé</strong></a> without applying for a specific position. We’ll contact you if your background and skills align with our needs.</p>
    </div>
    <hr>

@endsection