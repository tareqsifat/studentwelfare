<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Students Welfare Foundation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('frontend/img/logo.png') }}">

    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="5000000">
    <!-- <meta http-equiv="refresh" content="5"> -->

    <meta name="keywords" content="class one, html learn">
    <meta name="description" content="you learn every things about html">
    <meta name="author" content="mr abdul kuddus">
    <meta name="copyrigth" content="www.mysite.com">
    <meta name="revisit" content="5 days">

    <meta property="og:title" content="html learn" />
    <meta property="og:site_name" content="adfas" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://" />
    <meta property="og:image" content="http://" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />

    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="http://">
    <meta name="twitter:card" content="summary_large_image">
    @include('frontend.part.part_css')
</head>

<body>
    @yield('section')
    <footer id="footer">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-9 text-center">
                    <p>বি: দ্র: পরীক্ষা কেন্দ্রে স্ব স্ব প্রতিষ্ঠানের পোশাক পরে আসতে হবে।</p>
                </div>
                <div class="col-md-3 text-end">
                    <p style="border-top: 1px solid black; display: inline-block;;">পরীক্ষা নিয়ন্ত্রক</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>