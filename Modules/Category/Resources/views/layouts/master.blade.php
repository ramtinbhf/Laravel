<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Category</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-category', 'Resources/assets/sass/app.scss') }} --}}

    </head>
    <body>
        
        @yield('content')

        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-category', 'Resources/assets/js/app.js') }} --}}
    </body>
</html>
