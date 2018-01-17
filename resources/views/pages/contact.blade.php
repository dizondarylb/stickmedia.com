@extends('layouts.master')

@section('title', 'Contact - Stick Media')

@section('content')
    <div class="parallax-career-banner"> 
        <div class="container-left">
        <div class="title-banner pull-left">
            <h1 class="no-margin">DROP A LINE</h1>
            <p class="description-banner">Let us know what’s on your mind.</p>
        </div></div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6492.131747004867!2d121.03605612518399!3d14.64205014751057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7a990847911%3A0x6e3e5ee158ee500d!2sThree+Cyberpod+Centris%2C+Eton+Centris%2C+Abenida+Epifanio+de+los+Santos%2C+Diliman%2C+Lungsod+Quezon%2C+Kalakhang+Maynila!5e0!3m2!1sen!2sph!4v1515842604582" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>

    <div class="container">
    <div class="row">
        <div class="col-md-6">           
            <div class="align-center pad-t-20 pad-b-20">
                <i class="material-icons">&#xE0C8;</i>
                <p>Three Cyberpod, Eton Centris, 20th F, North Wing, Barangay Pinyahan, Quezon City, Philippines</p>
                <i class="material-icons">&#xE0BE;</i>
                <p>social@stickmedia.com</p>
            </div>
        </div>
        <style>
            /* #name { width: 100%; max-width: 400px; } */
        </style>

        <div class="col-md-6">
            <div class="align-center desktop-borderL">
                <h3>CONTACT US</h3>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}">
                <label class="mdl-textfield__label" for="name">Fullname</label>
            </div><br>
            
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}">
                <label class="mdl-textfield__label" for="email">Email</label>
            </div><br>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="subject" name="subject" value="{{ old('subject') }}">
                <label class="mdl-textfield__label" for="subject">Subject</label>
            </div><br>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%;">
                <textarea class="mdl-textfield__input" type="text" rows= "4" id="message" name="message">{{ old('message') }}</textarea>
                <label class="mdl-textfield__label" for="message">Message</label>
            </div><br>
            <button id="show-toast" href="{{ route('contact') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Submit
            </button>
            </div>
        </div>
    </div>
    <div id="toast" class="mdl-js-snackbar mdl-snackbar">
        <div class="mdl-snackbar__text"></div>
        <button class="mdl-snackbar__action" type="button"></button>
    </div>
    <script type="text/javascript">
        var snackbarContainer = document.querySelector('#toast');
        var showToastButton = document.querySelector('#show-toast');
        showToastButton.addEventListener('click', function() {
            var data = {message: 'Thanks for visiting! Sorry, No back-end apply. This was a demo for front-end. If you want a back-end process just email me and I can make demo for you.'};
            snackbarContainer.MaterialSnackbar.showSnackbar(data);  
        });
    </script>
    <br><hr>
    </div>
@endsection