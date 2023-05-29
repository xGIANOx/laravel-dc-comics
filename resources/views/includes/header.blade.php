<header>
    <div class="banner bg-primary d-flex justify-content-end">
        <a class="text-white me-4" href="#">DC POWER VISA</a>
        <a class="text-white ms-4 me-4" href="#">ADDITIONAL DC SITES</a>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-center">

            <div class="nav_left">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo">
                </a>
            </div>

            <div class="nav_right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="{{ route('characters') }}" class="text-decoration-none ms-5 {{ Route::currentRouteName() == 'characters' ? 'text-primary' : 'text-black' }}">CHARACTERS</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="{{ route('comics') }}" class="text-decoration-none {{ Route::currentRouteName() == 'comics' ? 'text-primary' : 'text-black' }}">COMICS</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'movies' ? 'text-primary' : 'text-black' }}">MOVIES</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'tv' ? 'text-primary' : 'text-black' }}">TV</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'games' ? 'text-primary' : 'text-black' }}">GAMES</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'collectibles' ? 'text-primary' : 'text-black' }}">COLLECTIBLES</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'videos' ? 'text-primary' : 'text-black' }}">VIDEOS</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'fans' ? 'text-primary' : 'text-black' }}">FANS</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none {{ Route::currentRouteName() == 'news' ? 'text-primary' : 'text-black' }}">NEWS</a>
                    </li>
                    <li class="d-flex align-items-center mx-3 h-100">
                        <a href="#" class="text-decoration-none me-5 {{ Route::currentRouteName() == 'shop' ? 'text-primary' : 'text-black' }}">SHOP</a>
                    </li>
                 </ul>
            </div>
        </div>
    </nav>



</header>