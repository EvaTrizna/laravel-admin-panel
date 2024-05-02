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
        body{
            background-color: black;
            color: #fff;
        }
        header{
            padding:0;
            margin: 0;
        }
        main{
            padding: 1% 10%;
        }
        .nav-item.nav-link {
            color: white !important;
        }
        a{
            color: #fff;
        }
     
   
        </style>
    </head>
    <body>
                    
                    @include('include.header')
                    <main>
                   
<div class="row g-5">
                 <div class="col-md-8">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
        <h3 class="mb-0">Featured post
          <a class='redac-a' href="#">Редактировать</a></h3>
        <div class="mb-1 text-body-secondary">Nov 12</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link"><font _mstmutation="1">
          Continue reading
          </font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="470535" _mstHash="31"><title _mstHash="32">Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" _mstHash="33">Thumbnail</text></svg>
      </div>
    </div>
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
        <h3 class="mb-0">Featured post</h3>
        <div class="mb-1 text-body-secondary">Nov 12</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link"><font _mstmutation="1">
          Continue reading
          </font><svg class="bi"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" _mstaria-label="470535" _mstHash="31"><title _mstHash="32">Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em" _mstHash="33">Thumbnail</text></svg>
      </div>
    </div>
</div>

<div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
      <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page"> Все записи </a>
      </li>
      <li>
        <a href="#" class="nav-link "> Черновики </a>
      </li>
      <li>
        <a href="#" class="nav-link "> Опубликованные</a>
      </li>
    </ul>
      </div>
    </div>
    </div>
                    </main>
                    @include('include.footer')
              
    </body>
</html>

