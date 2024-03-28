<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . '' : '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .hover {
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .hover:hover {
            background-color: white;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.25);
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination>.page-item>.page-link {
            color: #333;
        }

        .pagination>.page-item.active>.page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination>.page-item>.page-link:hover {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body style="background-color: #E3E3E3">

    @yield("navbar")

    @yield("content_berita")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
