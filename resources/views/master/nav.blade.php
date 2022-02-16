<div class="navbar bg-neutral text-neutral-content flex justify-between">
    <div class="flex-none px-2 mx-2">
        <span class="text-lg font-bold">
            <img src="https://tlgur.com/d/gwqLQQ08" alt="" style="width:70;">
        </span>
    </div>
    <div id="sidebar" class="flex-1 px-2 mx-2">
        <div id="chbar" class="items-stretch hidden lg:flex">
            <a href="{{ route('welcome') }}" class="btn btn-ghost btn-sm rounded-btn xitx">
                Home
            </a>
            <a href="{{ route('dashboard') }}" class="btn btn-ghost btn-sm rounded-btn xitx">
                Dashboard
            </a>
            <a href="{{ route('about') }}" class="btn btn-ghost btn-sm rounded-btn xitx">
                About
            </a>
            <a href="{{ route('changlog') }}" class="btn btn-ghost btn-sm rounded-btn xitx">
                Changlog
            </a>
        </div>
    </div>



    <div class="flex-none">
<div title="Change Theme" class="dropdown dropdown-end"><div tabindex="0" class="m-1 normal-case btn-ghost btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current md:mr-2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg> <span class="hidden md:inline">
          Change Theme
        </span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" class="inline-block w-4 h-4 ml-1 fill-current"><path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg></div> <div class="mt-16 overflow-y-auto shadow-2xl top-px dropdown-content h-96 w-52 rounded-b-box bg-base-200 text-base-content"><ul class="p-4 menu compact"><li><a tabindex="0" data-set-theme="light" data-act-class="active" class="">🌝  light</a></li><li><a tabindex="0" data-set-theme="dark" data-act-class="active">🌚  dark</a></li><li><a tabindex="0" data-set-theme="cupcake" data-act-class="active" class="">🧁  cupcake</a></li><li><a tabindex="0" data-set-theme="bumblebee" data-act-class="active" class="">🐝  bumblebee</a></li><li><a tabindex="0" data-set-theme="emerald" data-act-class="active" class="">✳️  Emerald</a></li><li><a tabindex="0" data-set-theme="corporate" data-act-class="active">🏢  Corporate</a></li><li><a tabindex="0" data-set-theme="synthwave" data-act-class="active" class="active">🌃  synthwave</a></li><li><a tabindex="0" data-set-theme="retro" data-act-class="active">👴  retro</a></li><li><a tabindex="0" data-set-theme="cyberpunk" data-act-class="active">🤖  cyberpunk</a></li><li><a tabindex="0" data-set-theme="valentine" data-act-class="active">🌸  valentine</a></li><li><a tabindex="0" data-set-theme="halloween" data-act-class="active">🎃  halloween</a></li><li><a tabindex="0" data-set-theme="garden" data-act-class="active">🌷  garden</a></li><li><a tabindex="0" data-set-theme="forest" data-act-class="active">🌲  forest</a></li><li><a tabindex="0" data-set-theme="aqua" data-act-class="active">🐟  aqua</a></li><li><a tabindex="0" data-set-theme="lofi" data-act-class="active">👓  lofi</a></li><li><a tabindex="0" data-set-theme="pastel" data-act-class="active">🖍  pastel</a></li><li><a tabindex="0" data-set-theme="fantasy" data-act-class="active">🧚&zwj;♀️  fantasy</a></li><li><a tabindex="0" data-set-theme="wireframe" data-act-class="active">📝  Wireframe</a></li><li><a tabindex="0" data-set-theme="black" data-act-class="active">🏴  black</a></li><li><a tabindex="0" data-set-theme="luxury" data-act-class="active">💎  luxury</a></li><li><a tabindex="0" data-set-theme="dracula" data-act-class="active">🧛&zwj;♂️  dracula</a></li><li><a tabindex="0" data-set-theme="cmyk" data-act-class="active">🖨  CMYK</a></li></ul></div></div>
    </div>
    @auth
        <div class="flex-none mx-4">
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-outline btn-accent btn-sm">Logout</button>
            </form>
            </a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex-none">
            <p>{{ auth()->user()->fname }}</p>
        </div>
    @endauth

    @guest
        <div class="flex-none lg:block hidden{{Request::segment(1) === 'signup' ? 'hidden' : ''}}">
            <a href="{{ route('login') }}">
                <button class="btn btn-outline btn-accent btn-sm">Log in</button>
            </a>
        </div>
        <div class="flex-none mx-2 lg:block hidden {{Request::segment(1) === 'signup' ? 'hidden' : ''}}">
            <a href="{{ route('signup') }}">
                <button class="btn btn-primary btn-sm">Get started</button>
            </a>
        </div>
    @endguest

    <div class="lg:hidden flex-none">
        <button id="xbx" class="btn btn-square btn-ghost" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
</div>



{{-- <div class="flex flex-col items-center justify-end w-full h-full pt-4 md:w-full md:flex-row md:py-0">
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" name="logout" id="logout"
            class="inline-flex items-center justify-center px-4 py-2 mr-1 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-full hover:bg-red-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">Log
            out</button>
    </form>
</div>

 @auth
                <a class="btn btn-ghost btn-sm rounded-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-5 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    User
                </a>
                <div class="flex-none">
                    <div class="avatar">
                        <div class="rounded-full w-10 h-10 m-1">
                            <img src="https://i.pravatar.cc/500?img=32">
                        </div>
                    </div>
                </div>
            @endauth
            @guest

                <button href="/login" class="btn btn-outline btn-sm btn-accent">Login</button>
                <button href="/signup" class="btn btn-sm">Get Started</button>
            @endguest --}}
