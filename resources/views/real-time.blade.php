<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Laravel Real Time</title> 
        <link rel="stylesheet" href="{{ mix('css/real-time.css') }}?v={{ mt_rand() }}"> 
    </head> 
    <body class="antialiased"> 
        <div id="app"> 
        </div> 
    </body> 
    <script src="{{ mix('js/real-time.js') }}?v={{ mt_rand() }}"></script> 
</html>