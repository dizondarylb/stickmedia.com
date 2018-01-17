<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <div class="header-logo align-center">
        <img id="logo" src="{{ asset('/public/images/stickmedia-logo-white.png') }}" width="100%;">
      </div>
      <div class="align-center">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    </div>

    <div class="collapse navbar-collapse" id="nav">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}" >Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('career') }}">Career</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
  </div>
</nav>

<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <div class="header-logo align-center">
        <img id="logo" src="{{ asset('/public/images/stickmedia-logo-colored.png') }}" width="100%;">
      </div>
    </div>

    <div class="collapse navbar-collapse" id="nav">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('home') }}" >Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('team') }}">Team</a></li>
            <li><a href="{{ route('career') }}">Career</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
  </div>
</nav>
