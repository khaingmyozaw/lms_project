<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Project</title>


    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    @vite([
        'resources/css/style.sass',
    ])
    @yield('style')

</head>
<body>
    
    <nav>
        @yield('navbar')
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>

    
    <!-- Bootstrap Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- jQuery Lin -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>

    @yield('script')
</body>
</html>