<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Custom CSS for the dashboard */
        body {
            font-family: 'figtree', sans-serif;
            background-color: #99A98F;
            color: #FFF8DE;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #FFF8DE;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .jumbotron {
            background-color: #99A98F;
            color: #FFF8DE;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 3rem;
            font-weight: 600;
        }

        .jumbotron p {
            font-size: 1.2rem;
        }

        .container {
            padding: 0 20px;
        }

        .bg-3 {
            background-color: #99A98F;
            color: #FFF8DE;
            padding: 50px 0;
        }

        .bg-3 h3 {
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .bg-3 .col-sm-3 {
            margin-bottom: 30px;
        }

        .bg-3 p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .bg-3 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Welcome Dashboard</a>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Your Dashboard</h1>
            <p>This is the place where you manage everything.</p>
        </div>
    </div>

    <div class="container">
        <div class="bg-3 text-center">
            <div class="container">
                <h3>Some of Your Work</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <p>Product 1</p>
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Product 1 Image">
                    </div>
                    <div class="col-sm-3">
                        <p>Product 2</p>
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Product 2 Image">
                    </div>
                    <div class="col-sm-3">
                        <p>Product 3</p>
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Product 3 Image">
                    </div>
                    <div class="col-sm-3">
                        <p>Product 4</p>
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Product 4 Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
