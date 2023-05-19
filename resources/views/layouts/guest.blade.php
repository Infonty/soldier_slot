<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <title>Picktime</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    @include('layouts.guest.header')
    
        @yield('main')
    
    @include('layouts.guest.footer')
    
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>

</body>
</html>
