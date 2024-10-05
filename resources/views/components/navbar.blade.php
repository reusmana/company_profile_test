<header class="flex w-full h-20 items-center justify-between px-8">
    <div class="flex items-center gap-6">
        <span class="h-10 min-w-10 w-10 rounded-full bg-blue-500 flex items-center justify-center">
            <h2 class="text-xl font-bold text-white">GG</h2>
        </span>
        <h1 class="text-2xl font-bold text-slate-700">
            Gommu Group
        </h1>
    </div>
    <div class="flex gap-10">
        <ul class="lg:flex items-center gap-6 text-slate-700 font-semibold  hidden">
            <li>
                <a href="{{ route('about') }}" class=" cursor-pointer">
                    About Company
                </a>
            </li>
        </ul>
        <button class="h-10 w-10 hamburger">
            <x-heroicon-c-bars-3-bottom-right />
        </button>
    </div>
    <div id="menu" class="fixed hidden inset-0 bg-slate-900/80  justify-center items-center w-full h-full z-[9999999]">
        <button class="h-10 w-10 close absolute top-10 right-10 text-white rotate-45"><x-heroicon-c-plus /></button>
    <ul class="flex flex-col gap-5 lg:gap-10">
        <li>
            <a href="{{ route('about') }}" class=" cursor-pointer text-xl lg:text-4xl font-semibold text-white">
                About Company
            </a>
        </li>
        @php
            $user = Auth::user();
        @endphp
        @php
            $isLogin = Auth::check();

        @endphp
       @if ($isLogin)
       <li>
            <a href="{{ route('logout') }}" class=" cursor-pointer text-xl lg:text-4xl font-semibold text-white">
                Logout
            </a>
        </li>
       @else
       <li>
        <a href="{{ route('login') }}" class=" cursor-pointer text-xl lg:text-4xl font-semibold text-white">
            Login
        </a>
    </li>  
       @endif
        </ul>
    </div>
</header>

<script>
    const hamburger = document.querySelector('.hamburger');
    const close = document.querySelector('.close');
    const menu = document.querySelector('#menu');
    hamburger.addEventListener('click', () => {
        menu.classList.add('flex')
        menu.classList.remove('hidden')
        document.body.style.overflow = 'hidden'
    })

    close.addEventListener('click', () => {
        menu.classList.add('hidden')
        menu.classList.remove('flex')
        document.body.style.overflow = 'auto'
    })

</script>