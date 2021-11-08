<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>My Comics | @yield('title')</title>

    @yield('cdn-section')
</head>
<body>

    @include('partials.header')
    
    <main class="container" id="main-wrapper">
        <section id="@yield('main-section-id')" class="@yield('main-section-classes')" >
            <div class="main-card p-3 m-2">
                @yield('main-content')
            </div>            
        </section>
    </main>

    
    @include('partials.footer')

    @yield('script-section')
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>