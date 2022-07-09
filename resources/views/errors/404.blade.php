<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Error Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .button {
            text-align: center;
            justify-content: center;
            position: relative;
        }

        a {
            color: black;
        }

        .center {
            text-align: center;
        }

        .button {
            position: relative;
            top: 50%;
        }
    </style>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Something is wrong please go back!</p>
        </div>
        <div class="center">
            <button class="button" onclick="history.back()">Go Back</button>
            <button class="button"><a href="/">Home</a></button>
        </div>
    </div>

</body>

</html>
