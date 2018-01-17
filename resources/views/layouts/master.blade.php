<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Dizon Developer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/css/material.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/css/style.css') }}">
    <style>
    body { margin:0; }
    </style>
    <script src="{{ asset('/public/js/app.js') }}"></script>
    <script src="{{ asset('/public/js/material.min.js') }}"></script>
    <script type="text/javascript">
        var url = window.location.href;
        var publicURL = url.indexOf("public");
        url = "{{ route('home') }}";
        url = url.replace("public", "");
        if(publicURL > -1) location.href= url;
        $(function(){
            $("#get-started").find("a").click(function(e) {
                e.preventDefault();
                var section = $(this).attr("href");
                $("html, body").animate({
                    scrollTop: $(section).offset().top
                });
            });
        });
    </script>
</head>
<body>
    
    @include('sections.header')
    @yield('content')
    @include('sections.career')
    @include('sections.footer')
    
    <script src="{{ asset('/public/js/script.js') }}"></script>

</body>
</html>