<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/style.css" rel="stylesheet" />

        <!-- Styles -->
            </head>

            
       <div class='container'>
       {{ __('Welcome to our website') }}
       <div class='float-end mt-1 mb-1'><a href='/get-form'>Добавить историю</a></div>
       <a href='/'><img src='/img/2072.jpg'></a>
       </div>
    <body class="antialiased">
       {{ $slot }} 


    </body>
</html>
