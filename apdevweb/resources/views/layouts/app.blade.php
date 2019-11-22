<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Up Study' }}</title>
    <link rel="icon" href="img/UpStudyIcon.png">
    <link rel="stylesheet" href="css/home.css"> 

    @yield('style')

    @yield('scripts')

</head>
<body>

    @yield('content')
    
    @include('inc.footer')

</body>
</html>
