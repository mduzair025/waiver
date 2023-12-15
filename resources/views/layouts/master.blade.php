<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    <style>
        :root {
            --bs-main: #FAFAFC;
            --bs-gray: #E7E7E7;
        }

        .vertical-center {
            display: flex;
            align-items: center;
            min-height: 100vh;
        }

        .ch-50 {
            height: 50px;
        }

        .bg-main {
            background-color: var(--bs-main);
        }

        body {
            background-color: var(--bs-gray);
            font-family: Poppins, sans-serif;
            font-weight: 500;
            font-size: 18px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }
        h2{
            font-size: 32px;
            font-weight: 800;
            line-height: 1.3;
            word-break: break-word;
            hyphens: auto;
        }

        
        input[type="text"], input[type="date"]{
            height: 50px;
        }

    </style>
</head>
<body>
    @yield('content')
</body>
</html>
