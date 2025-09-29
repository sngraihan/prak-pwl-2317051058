<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YCtnYmDr5pNlyT2bRjXh0JMHjY6Hw+ALEWIH" crossorigin="anonymous">
</head>

<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-VvpcYrF0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIds1K1eN7N6jIEzH" crossorigin="anonymous">
        </script>
</body>

</html>