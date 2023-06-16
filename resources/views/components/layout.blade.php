
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
       <div class='row'>
       <div class='col'>
    
      {{ Route::current()->uri() }}


      <li><a href="{{ route('lang',['locale'=>'en']) }}">en</a></li>
        <li><a href="{{ route('lang',['locale'=>'ru']) }}">ру</a></li> 
        
        
       </div>
       <div class='col'><a href='{{ app()->getLocale() }}/get-form'>{{ __('add history') }}</a></div>
</div>
       <a href='/'><img src='/img/2072.jpg'></a>
       </div>
    <body class="antialiased">
       {{ $slot }} 


    </body>
</html>
