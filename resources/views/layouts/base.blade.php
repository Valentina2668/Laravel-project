<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="купить оригинальные кроссовки адидас, nike air минск, кожаные, магазины, оригинал, мужские, оригинальные мужские, спортивную обувь, nike, фвшвфы, тшлу, regnm rhjccjdrb">
    <meta name="keywords" content="интернет магазин спортивной обуви">

    <title>Интернет-магазин спортивной обуви</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset("style.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
    <script defer src="{{asset("scripts.js")}}"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</head>

<body>

    <nav class="bg-white dark:bg-gray-900 flex-column md:flex-row">
        <div class="menu max-w-screen-xl flex place-items-start justify-between mx-auto p-6">
            <a href="/" class="flex items-center pt-[6px]">
                <img src="{{asset('/images/logo.jpg')}}" class="h-14 rounded-full" alt="Logo" />
                <span class="self-center text-2xl ml-2 font-semibold whitespace-nowrap dark:text-white">HighProfile</span>
            </a>

            <div class="items-center hidden  justify-between w-full pt-2 md:flex md:pt-0 md:w-auto" id="navbar">
                <div class="relative mt-3 md:hidden" id="navbar">
                    <form action="{{asset('allproducts')}}" class="search-form pt-3">
                        @csrf
                        <div class="absolute inset-y-0 right-6 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" name="search" class="block w-full p-6 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск...">
                    </form>
                </div>

                <ul class="flex flex-col md:font-medium bg-transparent md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li class="pt-1">
                        <x-nav-link href="/">
                            <p class="block pt-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Главная</p>
                        </x-nav-link>
                    </li>
                    <li class="pt-1">
                        <x-nav-link href="/products" :active="request()->routeIs('products')">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Каталог</p>
                        </x-nav-link>
                    <li class="pt-1">
                        <x-nav-link href="/about" :active="request()->routeIs('about')">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> О нас</p>
                        </x-nav-link>
                    </li>
                    <li class="pt-1">
                        <x-nav-link href="/blog" :active="request()->routeIs('about')">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Блог</p>
                        </x-nav-link>
                    </li>
                    <li class="pt-1">
                        <x-nav-link href="{{asset('favorites')}}">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Избранное</p>
                        </x-nav-link>
                    </li>

                    <li class="pt-1"><x-nav-link href="/contact">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Контакты</p>
                        </x-nav-link></li>


                    @if(auth()->guest())
                    <li class="pt-1"><x-nav-link href="/login">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Войти</p>
                        </x-nav-link></li>
                    <li class="pt-1"><x-nav-link href="/register">
                            <p class="block py-2 pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> Регистрация
                            <p>
                        </x-nav-link></li>
                    @else
                    <li class="pt-1">
                        <x-nav-link href="{{asset('dashboard')}}">
                            <p class="block px-2 pt-2 md:pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> {{ __('Профиль') }}</p>
                        </x-nav-link>
                    <li class="pt-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <p class="block px-2 pt-2 md:pl-3 pr-4 text-xl text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"> {{ __('Выйти') }}</p>
                            </x-nav-link>
                        </form>
                    </li>

                    @endif
                </ul>
            </div>
            <div class="flex menu-mobile">
                <div class="flex pr-4 pt-4 md:justify-between">
                    <a href="/cart">
                        <svg class="h-7 w-7  text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                    </a>
                    <span class="ml-3  text-gray-500">{{(isset($_COOKIE['order']))? count(explode(',', $_COOKIE['order'])):0}}</span>
                </div>
                <form action="{{asset('allproducts')}}" class="search-form pt-3">
                    @csrf
                    <button id="search-toggle" type="button" data-collapse-toggle="navbar" aria-controls="navbar" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Поиск</span>
                    </button>

                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-5 left-36 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" name="search" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск...">
                    </div>
                </form>

                <button id="navbar-toggle" type="button" class="inline-flex mt-[9px] items-center w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

            </div>

        </div>
    </nav>

    @yield('content')



    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3 class="normal-case">Быстрые ссылки</h3>
                <a href="/"><i class="fas fa-angle-right"></i>Домой</a>
                <a href="/products"><i class="fas fa-angle-right"></i>Каталог</a>
                <a href="/about"><i class="fas fa-angle-right"></i>О нас</a>
                <a href="/blog"><i class="fas fa-angle-right"></i>Блог</a>
                <a href="/contact"><i class="fas fa-angle-right"></i>Контакты</a>

                <a href="/cart"><i class="fas fa-angle-right"></i>Корзина</a>
            </div>

            <div class="box">
                <h3 class="normal-case">Дополнительные ссылки</h3>
                @if(auth()->guest())
                <a href="/login"><i class="fas fa-angle-right"></i>Войти</a>
                <a href="/register"><i class="fas fa-angle-right"></i>Регистрация</a>
                @else
                <a href="/profile"><i class="fas fa-angle-right"></i> Мой Профиль </a>
                <a href="#"><i class="fas fa-angle-right"></i> Мои заказы </a>
                <a href="#"><i class="fas fa-angle-right"></i> Избранное </a>
                @endif
                <a href="/terms"><i class="fas fa-angle-right"></i> Пользовательское соглашение </a>
                <a href="/policy"><i class="fas fa-angle-right"></i> Политика конфиденциальности </a>
            </div>
            <div class="box">
                <h3 class="pb-1">Время работы</h3>
                <p>Пн-Пт: <br>10:00-20:00</p>
                <p>Сб-Вс: <br>12:00-20:00</p>
            </div>
            <div class="box">
                <h3 class="pb-1">Наш адрес</h3>
                <p>ул. Петра Мстиславца, 20</p>
            </div>
            <div class="box">
                <h3 class="normal-case">Подписывайся на нас</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <!-- <a href="#"><i class="fab fa-pinterest"></i> pinterest </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"><i class="fab fa-github"></i> github </a> -->
            </div>
            <div class="box">
                <h3 class="normal-case">Рассылка</h3>
                <p class="normal-case">Подпишись на обновления</p>
                <form action="{{asset('subscribe')}}" method="post">
                @csrf
                    <input type="email" name="email" placeholder="Введите адрес электронной почты">
                    <input type="submit" value="subscribe" class=" mt-3 py-2.5 px-5 me-2 mb-2 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-green-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">

                </form>
            </div>
        </div>
        <div class="credits">created by <span>Valentinahc </span>| all rights reserved</div>
    </section>
</body>

</html>