
<head>
    <title>@yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
    <table class="table">
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')
    </table>
    </nav>


