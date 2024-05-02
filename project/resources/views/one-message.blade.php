<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
        
        header{
            padding:0;
            margin: 0;
        }
        main{
            padding: 1% 10%;
        }
        .nav-item.nav-link {
            color: gray !important;
        }
        a{
            color: gray !important;
        }
        
   
        </style>
    </head>
    <body>
                    
    @include('include.header')
    <main>

    <div class="alert alert-info" role="alert">
        <h3>{{$data->title }}</h3>
        <p>{{ $data->category->title }}</p>
     
        <p>{{ $data->text_preview }}</p>
        <p><small>{{ $data->published_at }}</small></p>
    </div>
</main>
    @include('include.footer')
              
    </body>
</html>