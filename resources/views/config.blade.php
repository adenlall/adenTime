@extends('master.dash')
@section('title')
    Config Dash
@endsection
@section('content')

            <div class="overflow-x-scroll h-screen pb-24 px-4 md:px-6  bg-gray-200 dark:bg-gray-800">
                <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
                    Build your own experience, {{ auth()->user()->fname }}
                </h1>
                <h2 class="text-md text-gray-400" id="hhead">
                    from here you can edit your dashboard easily.
                </h2>

                @if (session('status'))
                    <div class="flex my-6 items-stretch w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
                        <div class="w-full">
                            <div class="w-full bg-green-300 dark:bg-green-500 text-black dark:text-white font-bold text-xl space-x-2 p-2">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                @endif
                <div class="flex my-6 items-stretch w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
                    <div class="w-full md:w-2/3">
                        <div class="shadow-lg w-full h-full overflow-hidden bg-gradient-to-tr from-purple-800 to-fuchsia-700">
                                <div class="flex flex-col h-full px-4 py-6 space-x-4">
                                    <h1 class="pl-4 text-2xl font-extrabold md:text-xl" id="comps"> Compitition Selected : {{ Auth()->User()->compitition }} </h1>
                                    <div class="w-full h-full flex items-center" style="margin: 0;">
                                        <button onclick="slide('left')" class="flex items-center p-4  transition ease-in duration-200 uppercase rounded-full bg-indigo-800 hover:bg-gray-800 hover:text-white border-4 border-gray-900 font-bold focus:outline-none"><</button>
                                            <div id="sec_roll" class="flex overflow-x-scroll text-black dark:text-white mx-1 pb-1 hide-scroll-bar">
                                                <div class="flex items-center h-full flex-nowrap px-2 py-2 space-x-4">
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- UEFA --}}
                                                        <img id="immg0" src="https://cdn-0.fifarosters.com/assets/backgrounds/Champions_League/UCL-Ball.jpg" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- PL --}}
                                                        <img id="immg1" src="https://i.ytimg.com/vi/Gb9FlRisQws/maxresdefault.jpg" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- Seria A --}}
                                                        <img id="immg2" src="https://www.soccerbible.com/media/99088/1-serie-a-logo-new.jpg" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- La liga --}}
                                                        <img id="immg3" src="https://cdn1-m.alittihad.ae/store/archive/image/2021/8/12/a7c7556a-dc90-476e-ab06-8337d3f7640d.jpg" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- BL --}}
                                                        <img id="immg4" src="https://firstsportz.com/wp-content/uploads/2020/05/Logo-Bundesliga.png" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                    <div class="rounded-lg xele" style="width: 10em !important; height:6em;" class="xele"> {{-- Ligue 1 --}}
                                                        <img id="immg5" src="http://ultimodiez.fr/wp-content/uploads/2017/07/naming-ligue-1-lfp-1.jpg" class="bg-white rounded-lg border-4 border-gray-900" style=" width: 100%; height:100%; object-fit:cover;">
                                                    </div>
                                                </div>
                                            </div>
                                        <button onclick="slide('right')" id="xelex" class="flex items-center p-4  transition ease-in duration-200 uppercase rounded-full bg-indigo-800 hover:bg-gray-800 hover:text-white border-4 border-gray-900 font-bold focus:outline-none">></button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="w-full max-h-52 min-h-52 h-52 md:w-1/3">
                        <img id="tyyt" src="https://www.framestore.com/sites/default/files/styles/slideshow_images_small_800_450/public/blocks/images/uefa_still001.jpg" class="bg-white" style=" width: 100%; height:100%; ;object-fit:cover;">
                    </div>
                </div>
              {{-- row two --}}
        <div class="flex my-6 items-stretch w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
            <div class="w-full md:w-1/2 bg-white dark:bg-gray-700 text-black dark:text-white p-4">
                <h1 class="text-xl font-semibold m-2 ml-1">Your time zone : <span class="text-lg font-medium opacity-90" id="tz">{{ Auth()->User()->timezone }}</span></h1>
                <div class="flex flex-col items-start">
                    <select id="selext" class="w-full p-2 m-2 ml-1 text-base bg-gray-300 dark:bg-gray-800 text-black dark:text-white" name="timezone" multiple></select>
                    <button onclick="tz()" id="dede" class="bg-purple-700 p-1 m-2 ml-1">Dedect</button>
                </div>
            </div>
            <div class="w-full md:w-1/2 bg-white dark:bg-gray-700 text-black dark:text-white space-x-2 p-2">
                <h1 class="text-xl font-semibold m-2 ml-1">Suggestion : <span class="text-lg font-medium opacity-90" id="am">{{ Auth()->User()->recommendation }}</span></h1>
                <p class="opacity-75 text-">select the recommendation type based on your city weather</p>
                <div class="flex flex-row space-x-2 mt-4">
                    <div id="recType" class="w-1/2 h-36 p-0 border-2 border-purple-600 bg-cover bg-center" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtiwwkW7uUB1oINVixK60CjYt0CCnRYMLsT4lE4MtpunaZSDe4'); background-size: cover; background-position: center;"><div class="flex items-center justify-center w-full h-full" style="background: #6521d1a8;"><p class="text-xl font-bold">Anime</p></div></div>
                    <div id="recType" class="w-1/2 h-36 p-0 border-2 border-purple-600 bg-cover bg-center" style="background: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQAFGFdFTq1I8zpiszG4mHS4ARhxg5wGi46rs-Qc-03J7E0o-qO'); background-size: cover; background-position: center;"><div class="flex items-center justify-center w-full h-full" style="background: #6521d1a8;"><p class="text-xl font-bold">Manga</p></div></div>
                </div>
            </div>
        </div>
        {{-- row three --}}
            <div class="flex flex-row items-center w-full bg-white dark:bg-gray-700 text-black dark:text-white space-x-2 p-2">
                <h1 class="text-xl font-bold p-2">Save your changes</h1>
                <form class="p-0 m-0 h-min" action="{{ asset('config') }}" method="POST">
                    @csrf
                    <div class="hidden p-0 m-0 h-min">
                        <input type="hidden" name="recommendation" value="{{ auth()->user()->recommendation }}">
                        <input type="hidden" name="timezone" value="{{ auth()->user()->timezone }}">
                        <input type="hidden" name="compitition" value="{{ auth()->user()->compitition }}">
                    </div>
                    <button type="submit" class="py-0 px-3 bg-purple-600 hover:bg-purple-500 font-bold"> SAVE </button>
                </form>
            </div>

        {{-- end --}}
    </div>

@endsection
@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
    <script>

        function tz() {
            // guess user timezone
            document.querySelector('#tz').innerHTML = moment.tz.guess();
            btn = document.querySelector('#dede');
            btn.disabled = true;
            btn.style.background = 'gray';
            document.querySelector('input[name="timezone"]').value = moment.tz.guess();

        };

        selectorList = document.querySelector('#selext').options
        options = moment.tz.names();

        for (let i = 0; i < options.length; i++) {
            selectorList.add(
                new Option(options[i], options[i])
            );
        }
        // console.log(selectorList[6].value, options[6]);
        for (let i = 0; i < selectorList.length; i++) {
            selectorList[i].addEventListener('click', function () {
                document.querySelector('#tz').innerHTML = options[i];
                document.querySelector('#dede').disabled = false;
                document.querySelector('#dede').style.background = 'rgb(126 34 206)';
                document.querySelector('input[name="timezone"]').value = options[i];
            });
        };
        recType = document.querySelectorAll('#recType');
        recType_arr = ['anime', 'manga'];
        for (let i = 0; i < recType.length; i++) {
            recType[i].addEventListener('click', function () {
                document.querySelector('#am').innerHTML = recType_arr[i];
                document.querySelector('input[name="recommendation"]').value = recType_arr[i];

                for (let y = 0; y < recType.length; y++) {
                    recType[y].style.borderColor = 'rgb(147 51 234)';
                    recType[y].style.borderWidth = '2px';
                };
                recType[i].style.borderColor = '#000';
                recType[i].style.borderWidth = '4px';
            });
        };

        function slide(direction){
        var container = document.querySelector('#sec_roll');
        scrollCompleted = 0;
        var slideVar = setInterval(function(){
            if(direction == 'left'){
                container.scrollLeft -= 10;
            } else {
                container.scrollLeft += 10;
            }
            scrollCompleted += 10;
            if(scrollCompleted >= 100){
                window.clearInterval(slideVar);
            }
        }, 50);
}


    </script>
@endsection


