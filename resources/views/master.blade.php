<!doctype html>

<html lang='en'>

<head>

        <title>P3: Online Ordering System</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='https://bootswatch.com/4/spacelab/bootstrap.min.css' type='text/css'>

</head>
@stack('head')

<body>
<br>
<header>
    <a href="{{ url('') }}">
    <h2>Fast-Casual Mexican Restaurant</h2>
    </a>
    <h5><i>Online Ordering System</i></h5>
</header>

<section>
    @yield('content')
</section>

<footer>
    <br>
    <a href='http://github.com/q0w9e8r7t6y5/p3'><i class='fab fa-github'></i> View on Github</a> |&copy; 2018
</footer>

{{-- JS global to every page can be loaded here; jQuery included just as an example --}}
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
        integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa'
        crossorigin='anonymous'></script>

{{-- JS specific to a given page/child view can be included via a stack --}}
@stack('body')

</body>

</html>
