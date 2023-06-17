<html>
    <head>
        <title>{{ $title }} | {{ ucfirst(request()->getHttpHost()) }}</title>
        @yield('meta')

        <meta name="description" content="{!! $description !!}">
        <meta name="title" content="{{ $title }} | {{ ucfirst(request()->getHttpHost()) }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta property="og:title" content="{{ $title }} | {{ ucfirst(request()->getHttpHost()) }}" />
        <meta property="og:description" content="{!! $description !!}" />

        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="theme-color" content="#ededed">
        <link rel="canonical" href="{{ url()->current() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>

    <body>
        @yield('main')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
