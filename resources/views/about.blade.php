@extends('master.layout')
@section('title')
    About
@endsection
@section('style')
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
@endsection
@section('nav')
    @extends('master.nav')
@endsection
@section('body')


    <div class="w-full h-1/2 flex flex-col items-stretch m-0 ">
        <div class="w-full h-full flex items-center "
            style="background: url('https://ripeemangoes.files.wordpress.com/2017/12/original.jpg?w=660');background-size: cover; background-position:bottom;">
            <div class="container flex items-center justify-center w-full h-1/2 m-auto text-4xl font-extrabold text-center">
                <header style="color:white;">Von Herzen - möge es wieder zu Herzen gehen <span>🎵</span></header>
            </div>
        </div>
        <div class="w-full p-2 text-center">
            <p class="container m-auto text-white">From the heart - may it go back to the heart</p>
        </div>
    </div>

    <div class="container m-auto">
        <div class="flex flex-col items-stretch lg:flex-row w-fit m-auto">
            <div class="m-4 p-8 rounded-lg bg-info flex flex-col items-center space-y-2">
                <div class="stat-figure text-info">
                    <div class="avatar online">
                        <div class="w-16 h-16 p-1 mask mask-squircle bg-base-100">
                            <img src="https://avatars.githubusercontent.com/u/91727676?v=4"
                                alt="Avatar Tailwind CSS Component" class="mask mask-squircle">
                        </div>
                    </div>
                </div>
                <p>Aden lall</p>
            </div>
            <div class="flex flex-col m-4 p-8 px-14 rounded-lg bg-info items-center space-y-2">
                <p class="text-xl font-bold">Developer's social links</p>
                <div class="flex flex-row space-x-2">
                    <a target="_blank" href="twitter.com/adenlall"><button class="btn btn-accent"><x-bxl-twitter width="30" /> twitter</button></a>
                    <a target="_blank" href="github.com/adenlall"><button class="btn btn-accent"><x-bxl-github width="30" /> Github</button></a>
                    <a target="_blank" href="linkedin.com/adenlall"><button class="btn btn-accent"><x-bxl-linkedin width="30" /> LinkedIn</button></a>
                    <a target="_blank" href="instagam.com/aden_lall"><button class="btn btn-accent"><x-bxl-instagram width="30" /> Instagram</button></a>
                    <a target="_blank" href="t.me/adenlall"><button class="btn btn-accent"><x-bxl-telegram width="30" /> Telegram</button></a>
                </div>
            </div>
        </div>

    </div>

    <div class="antialiased">
        <div id="__next">
            <section class="header relative pt-16 items-center flex h-screen" style="max-height:860px">
                <div class="container mx-auto items-center flex flex-wrap">
                    <div class="w-full md:w-8/12 lg:w-6/12 xl:w-6/12 px-4">
                        <div class="flex flex-col pt-32 sm:pt-0">
                            <h2 class="font-semibold text-4xl ">Lravel open source project.</h2>
                            <p class="mt-4 text-lg leading-relaxed ">
                                Laravel school project full stack modern UI.
                            </p>
                            <div class="mt-12">
                                <a href="https://github.com/adenlall"
                                    class="github-star m-0 text-white font-bold px-0 py-4 rounded outline-none focus:outline-none mb-1 bg-blueGray-700 active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg"
                                    target="_blank">
                                    <button class="btn btn-primary">Github</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="absolute top-0 b-auto right-0 pt-16 sm:w-6/12 -mt-48 mx-auto sm:mt-0 w-10/12"
                    src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/ill_header_3.png" alt="..."
                    style="max-height:860px" />
            </section>
        </div>
    </div>

@endsection

@section('footer')
    @include('master.footer')
@endsection

@section('script')


<script>


document.querySelector('#xbx').addEventListener('click', function () {
    if (document.querySelector('#chbar').style.display === 'none') {

    document.querySelector('#sidebar').style.cssText = ' position: fixed;background: linear-gradient(49deg, black, #281451b8);width: 100%;margin: 0;z-index: 10;color: white;display: flex;margin-top: 30rem;width: 95%;height: 66%;box-shadow: black 0rem 0.2rem 17px 4px;border-radius: 1rem;'
    document.querySelector('#chbar').style.cssText   = 'height: 100%;display: flex;flex-direction: column;align-items: center;align-content: center;height: 100%;width: 100%;'
    var deiv = document.querySelectorAll('.xitx')
    for (let i = 0; i < deiv.length; i++) {
        deiv[i].style.cssText   = 'margin-top:1.3rem; padding: 1rem; font-size:1.6rem;'
    }

    }else{

    document.querySelector('#sidebar').style.cssText = 'display: none;'
    document.querySelector('#chbar').style.cssText   = 'display: none;'
    document.querySelector('.xitx').style.cssText   = 'margin-top:0; padding: 0;'

    }


})

</script>

@endsection
