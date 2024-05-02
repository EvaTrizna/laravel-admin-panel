 <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                       
    @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a
            href="{{ url('/dashboard') }}"
            >
            Панель управления постами
            </a>
            @else
                <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    Вход
                    </a> 
                    @if (Route::has('register'))
                    <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                Register
            </a>
            @endif
                                   
        @endauth
    </nav>
    @endif
</header> 
<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-8 pt-1">
      <a class="text-decoration-none" href="#" >ЛОГО</a>
      </div>
      
      <div class="col-4 d-flex justify-content-end align-items-center">
        
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        <a class="link-secondary" href="#" aria-label="Искать" _mstaria-label="74607" _msthash="8">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title _mstTextHash="802048" _mstHash="9">Искать</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
      </div>
    </div>


    </header>
  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link text-white" href="#" >Все записи</a>
      <a class="nav-item nav-link " href="#" >Технологии</a>
      <a class="nav-item nav-link " href="#" >Проектировать</a>
      <a class="nav-item nav-link " href="#" >Культура</a>
      <a class="nav-item nav-link " href="#" >Бизнес</a>
      <a class="nav-item nav-link " href="#" >Мнение</a>
      <a class="nav-item nav-link " href="#" >Наука</a>
      <a class="nav-item nav-link " href="#" >Здоровье</a>
      <a class="nav-item nav-link " href="#" >Стиль</a>
      <a class="nav-item nav-link " href="#" >Путешествие</a>
    </nav>
  </div>

</div>