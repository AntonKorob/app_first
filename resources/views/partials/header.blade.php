<nav
    class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">

        <a href="{{ route('home' ) }}"
            class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Laravel с
            нуля</a><br>
        <span class="text-xs text-grey-dark">Мои первые шаги в Laravel</span>

        <div class="sm:mb-0 self-center">
            @auth("web")
            <a href="{{ route( 'logout' )}}" class=" btn btn-info text-decoration-none ">Выйти</a>
            @endauth

            @guest("web")
            <a href="{{ route( 'login' )}}" class=" btn btn-info text-decoration-none ">Войти</a>
            @endguest
        </div>

    </div>


</nav>