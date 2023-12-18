<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <style>
        :root {
            --bs-main: #FAFAFC;
            --bs-gray: #E7E7E7;
        }

        body {
            font-size: 18px;
            font-weight: 500;
            background-color: var(--bs-gray);
            font-family: Poppins, sans-serif;
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

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }
        h2{
            hyphens: auto;
            font-size: 32px;
            font-weight: 800;
            line-height: 1.3;
            word-break: break-word;
        }

        
        input[type="text"], input[type="date"]{
            height: 50px;
        }
        .dnone{
            display: none;
        }
    </style>
    @stack('css')
</head>
<body>
    @yield('content')
{{-- </body> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
@stack('js')
{{-- </html> --}}
