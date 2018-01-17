
<style>
    .social-media {
        -webkit-transition: filter .5s ease-in-out;
        -moz-transition: filter .5s ease-in-out;
        -o-transition: filter .5s ease-in-out;
        transition: filter .5s ease-in-out;
        -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
        cursor: pointer;
    }
    .social-media:hover {        
        -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
        filter: grayscale(0%);
    }
    .div-social-media {
        padding-bottom: 20px;
    }
</style>

<div class="container align-center">
    <h2>STICK WITH US</h2>
    <p>We want your passion and expertise on our team. Send us your CV and anything else that will show us why you’ll be a rock star with StickMedia!</p>
    <div class="home-banner-description">
        <a href="{{ route('apply') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Apply Now
        </a>
    </div>
    <hr>
    <div class="div-social-media align-center">
        <a href="{{ url("https://www.facebook.com/StickMedia2013/") }}" target="_blank"><img class="social-media" src="{{ asset('/public/images/social/facebook.png') }}"></a>
        <a href="{{ url("https://twitter.com/stick_media") }}" target="_blank"><img class="social-media" src="{{ asset('/public/images/social/twitter.png') }}"></a>
        <a href="{{ url("https://www.linkedin.com/company-beta/13255516/") }}" target="_blank"><img class="social-media" src="{{ asset('/public/images/social/linkedin.png') }}"></a>
    </div>
</div>