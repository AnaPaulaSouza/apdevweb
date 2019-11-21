<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="icon" href="img/UpStudyIcon.png">
    <link rel="stylesheet" href="css/home.css"> 

    @yield('style')

    @yield('scripts')

</head>
<body>

    @include('inc.header')

    <main>
        @yield('content')
    </main>
    
    @include('inc.footer')

</body>
</html>
