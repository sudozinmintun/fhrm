<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED</title>
    <meta content="" name="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED">
    <meta name="keywords" content="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED" />
    <meta property="og:title" content="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED" />
    <meta property="og:image" content="{{ asset('assets/images/logo1.png') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="FORERUNNER HUMAN RESOURCES MANAGEMENT COMPANY LIMITED" />
    <link rel="icon" href="{{ asset('assets/images/logo1.png') }}" type="image/gif" sizes="20x20">

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate-2.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/flaticon/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progresscircle.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.menu')

        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.flagstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>

    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>

    <script src="{{ asset('assets/js/simple-rating.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7695b5c6fd83a1b7',m:'gHz4wHjWdMPzuUcdr_WNpfa5Ag6SJ9wFn0IoE7H3ug0-1668323662-0-Abiy/5BNM8/uO8UXWdGpCQ9zcLRZaXLhfKrBHiFrDT9fqNdnYUjLDpy6li7sXnm1eUjp0qpme/LJvMlY+G29P5KN0U7gRSOtrd4a11RpsG1BgrTX8zQKoZuca+Y5QykXaIeRRQAJskt17H7mMlWY3/Ky0iY9bZFJspKohiTXGsZF',s:[0xa5ff21443f,0xdb3a0f673d],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible5615.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

</html>
