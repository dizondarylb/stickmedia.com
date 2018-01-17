@extends('layouts.master')

@section('title', 'Apply Now - Stick Media')

@section('content')
    <div class="parallax-career-banner"> 
        <div class="container-right">
        <div class="title-banner pull-right">
            <h1 class="no-margin">STICK WITH US</h1>
            <p class="description-banner">We want your passion and expertise on our team.</p>
        </div></div>
    </div>
    <style>
    .mdl-button--file input {
            cursor: pointer;
            height: 100%;
            right: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            width: 400px;
            z-index: 4;
        }
    }
    .mdl-textfield--file .mdl-textfield__input {
            box-sizing: border-box;
            width: calc(100% - 32px);
        }
        .mdl-button--file {
            right: 0;
        }
    }
    </style>
    <div class="container align-center">
        <h3>APPLY NOW</h3>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}">
            <label class="mdl-textfield__label" for="name">Fullname</label>
        </div><br>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="email" name="email" value="{{ old('email') }}">
            <label class="mdl-textfield__label" for="email">Email</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="job" name="job" value="{{ old('job') }}">
            <label class="mdl-textfield__label" for="job">Job Position</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%;">
            <textarea class="mdl-textfield__input" type="text" rows= "4" id="message" name="message">{{ old('message') }}</textarea>
            <label class="mdl-textfield__label" for="message">Message</label>
        </div><br>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
            <input class="mdl-textfield__input" placeholder="ATTACH YOUR CV" type="text" id="file" readonly/>
            <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
            <i class="material-icons">attach_file</i><input type="file" id="upload">
            </div>
        </div><br>

        <button id="show-toast" href="{{ route('contact') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Submit
        </button>
    </div>
    <br><hr>

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
@endsection