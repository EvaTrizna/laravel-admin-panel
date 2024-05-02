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
    <main>
                    @include('include.header')
                    <h3 class="pb-4 mb-4 fst-italic " >Все посты</h3>
<div class="row g-5">
@foreach($data as $el)
  @if($el->visible==true)

         
<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-primary-emphasis"> {{ $el->category->title }}</strong>
        <h4 class="mb-0">{{ $el->title }}</h4>
         <!-- <a class='redac-a' href="#">  Редактировать</a></h3>-->
        <div class="mb-1 text-body-secondary">{{$el->published_at}}</div>
        <p class="card-text mb-auto">{{ $el->text_preview }}</p>
        <a href="{{route('post-data-one',$el->id)}}"><button class="btn ">Детали ></button></a>
      </div>
      <div class="col-auto d-none d-lg-block">
        @if($el->img_preview_id==true)
        <img class="bd-placeholder-img" width="200" height="auto" src="{{$el->img_preview_id->src}}" ></img>
        @else
        <img class="bd-placeholder-img" width="200" height="auto" src="img/post1.png" ></img>
        @endif
      </div>
    </div>
  </div>
 

  @endif
@endforeach
</div>
                    </main>
                    @include('include.footer')
              
    </body>
</html>