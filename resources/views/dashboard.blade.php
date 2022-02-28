@extends('master.dash')
@section('title')
    Dashboard
@endsection
@section('style')
@endsection
@section('content')
    <?php

    ?>

    {{-- ||||-- CONTENT -----||||||||||||||||||||||||||||||------- --}}
    <div class="overflow-x-scroll h-screen pb-24 px-4 md:px-6  bg-gray-200 dark:bg-gray-800">
        <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
            <?php
            $timezone = auth()->user()->timezone;
            ?>

            @if (Carbon\Carbon::now($timezone)->hour < 12 and Carbon\Carbon::now($timezone)->hour > 05)
                Good morning,
            @elseif(Carbon\Carbon::now($timezone)->hour < 17)
                Good afternoon,
            @elseif(Carbon\Carbon::now($timezone)->hour < 20)
                Good evening,
            @else
                Good Night,
            @endif {{ auth()->user()->fname }}
        </h1>
        <h2 class="text-md text-gray-400">
            Here&#x27;s what&#x27;s happening with your ambassador account today,{{ auth()->user()->lname }}.
        </h2>
        {{-- ||||-- HOUR -----||||||||||||||||||||||||||||||------- --}}
        <div class="flex my-6 items-center w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
            <div class="w-full md:w-6/12">
                <div class="shadow-lg w-full bg-white dark:bg-gray-700 relative overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-6 space-x-4">
                        <div class="flex items-center">
                            <span class="rounded-full relative p-5 bg-purple-500">
                                <x-heroicon-o-at-symbol
                                    class="text-white h-5 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" />
                            </span>
                            <p class="text-sm text-gray-700 dark:text-white ml-2 font-semibold">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                        <div class="mt-6 md:mt-0 text-black dark:text-white font-bold text-xl">
                            <?php
                            $c_h = Carbon\Carbon::now(auth()->user()->timezone)->format('H');
                            $r_h = 24 - $c_h;
                            $pour = ($c_h * 100) / 24;
                            ?>
                            {{ $r_h }}
                            <span class="text-xs text-gray-400">
                                hour before the day's done.
                            </span>
                        </div>
                    </div>
                    <div class="w-full h-3" style="background: #00000042">
                        <div class="w-2/5 h-full text-center text-xs text-white bg-purple-500"
                            style="width: {{ $pour }}%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center w-full md:w-1/2 space-x-4">
                <div class="w-1/2">
                    <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-gray-700 relative">
                        <p class="text-2xl text-black dark:text-white font-bold">
                            TODO
                        </p>
                        <p class="text-gray-400 text-sm">
                            ----- 12
                        </p>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-gray-700 relative">
                        <p class="text-2xl text-black dark:text-white font-bold">
                        <div class="text-black dark:text-white font-semibold text-2xl" id="clock">8:10:45</div>
                        </p>
                        <p class="text-gray-400 text-sm">
                            degital clock
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- ||||-- WEATHER --||||||||||||||||||||||||||||||------- --}}
        <div
            class="flex my-6 flex-col items-stretch w-full space-y-4 md:space-x-4 text-black dark:text-white md:space-y-0 md:flex-row">
            <div class="w-full md:w-1/2 shadow-lg relative overflow-hidden bg-cover bg-center"
                style="background: url({{ $photo['results'][0]['cover_photo']['urls']['regular'] }}); background-size: cover;">
                <div class="flex justify-between w-full h-full px-4 pb-9 pt-28 space-x-4"
                    style="background: linear-gradient(337deg, #1f293882, #ffffff00);">
                    <div class="flex flex-col justify-start ">
                        <div class="flex flex-row items-center">
                            <img src="https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" alt=""
                                srcset="
                                            https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@4x.png 4x,
                                            https://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png 2x,
                                            ">
                            <p class="text-2xl ml-2 font-bold border-gray-200 ttx">
                                {{ $weather['weather'][0]['main'] }}
                            </p>
                        </div>
                        <p class="text-sm ml-2 font-medium border-gray-200 ttx opacity-85">
                            {{ $weather['weather'][0]['description'] }}
                        </p>
                    </div>
                    <div
                        class="flex flex-col justify-end flex-wrap border-gray-200 mt-6 md:mt-0 font-font-semibold text-xl ttx">
                        <span class="text-xs ttx opacity-50">
                            feels like: <span
                                class="ttx opacity-100 text-lg font-semibold">{{ $weather['main']['feels_like'] }}</span>
                        </span>
                        <span class="text-xl ttx">
                            {{ $weather['name'] }}, <span
                                class="text-xs ttx opacity-85">{{ Location::get($ip)->countryCode }}</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 shadow-lg relative overflow-hidden bg-cover bg-center">
                <div class="flex justify-between px-4 py-9 w-full h-full space-x-4 bg-white dark:bg-gray-700 ">
                    <div class="flex flex-col text-black dark:text-white justify-start ">
                        <p class="text-xl ml-2 text-black dark:text-white border-gray-200 opacity-70">
                            Next holiday:
                        </p>
                        <p class="text-2xl ml-2 opacity-90 font-bold text-black dark:text-white border-gray-200">
                            {{ $holiday['name'] }}
                        </p>
                        <p class="text-xl ml-2 font-semibold text-black dark:text-white border-gray-200 opacity-70">
                            {{ $holiday['date'] }}
                        </p>
                    </div>
                    <div
                        class="flex flex-col justify-end flex-wrap text-black dark:text-white border-gray-200 mt-6 md:mt-0 opacity-75 font-medium text-sl break-all max-w-md">
                        <span class="opacity-80 font-semibold">type :</span>
                        {{ str_replace('_', ' ', $holiday['type']) }}
                    </div>
                </div>
            </div>
        </div>
        {{-- GOOGLE ADS --}}

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6170063612762128"
                            crossorigin="anonymous"></script>
            <!-- dashboard ads -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6170063612762128" data-page-url="https://adenlall.herokuapp.com/"
                data-ad-slot="3754049196" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-6170063612762128",
                    enable_page_level_ads: true
                });
            </script>

        {{-- ||||-- UFEA -----||||||||||||||||||||||||||||||------- --}}
        <div class=" font-bold text-black text-2xl dark:text-white">
            {{ $compitition['area']['name'] }} Compitition
            <span class="p-1 ml-4 rounded-lg w-4 h-2 bg-yellow-400 text-black text-xs">
                beta
            </span>
        </div>
        <div
            class="flex my-6 flex-col items-stretch w-full space-y-4 md:space-x-4 text-black dark:text-white md:space-y-0 md:flex-row">
            <div class="w-full md:w-1/2 shadow-lg relative overflow-hidden bg-cover bg-center bg-white dark:bg-gray-700">
                <div class="px-4 py-6">
                    <p class="font-xl pl-4 font-bold  ">{{ $compitition['name'] }} Week Timed match
                    </p>
                    <div class="h-96 overflow-x-scroll">
                        <div class="px-4 py-2 flex flex-col">
                            @foreach ($matches as $match)
                                <?php
                                $home_config = array_search($match['homeTeam']['name'], array_column($teams, 'name'));
                                $home = $teams[$home_config];
                                $away_config = array_search($match['awayTeam']['name'], array_column($teams, 'name'));
                                $away = $teams[$away_config];
                                ?>
                                {{-- #f3d57c91, #1de8f76e live --}}
                                {{-- #48479659, #e54fda1f timed --}}
                                {{-- #dd101059, #800f0f9c paused --}}
                                <div class="flex flex-col py-4 items-center rounded-xl my-4"
                                    style="background:linear-gradient(324deg,@if ($match['status'] === 'PAUSED' or $match['status'] === 'POSTPONED') {{ '#dd101059,#800f0f9c' }} @endif @if ($match['status'] === 'FINISHED') {{ '#0000006e,#0401061f' }} @endif @if ($match['status'] === 'IN_PLAY') {{ '#f3d57c91,#1de8f76e' }} @endif @if ($match['status'] === 'TIMED') {{ '#48479659, #e54fda1f' }} @endif );">
                                    <div class="flex items-center px-2 py-2">
                                        <div class="flex flex-col items-center w-40">
                                            {{-- <x-heroicon-o-user-circle width="60" height="60" class="text-black" fill="transparent" /> --}}
                                            <img src="{{ $home['crestUrl'] }}" width=60 height=60 alt="">
                                            <p class="whitespace-nowrap overflow-hidden text-ellipsis text-center"
                                                style="width: 7.4rem;">{{ $home['shortName'] }}</p>
                                        </div>
                                        <p class="px-4 font-bold">VS</p>
                                        <div class="flex flex-col items-center w-40">
                                            {{-- <x-heroicon-o-user-circle width="60" height="60" class="text-black" fill="transparent" /> --}}
                                            <img src="{{ $away['crestUrl'] }}" width=60 height=60 alt="">
                                            <p class="whitespace-nowrap overflow-hidden text-ellipsis text-center"
                                                style="width: 7.4rem;">{{ $away['shortName'] }}</p>
                                        </div>
                                    </div>

                                    @if ($match['status'] === 'TIMED')
                                        <p>Play IN : {{ $match['utcDate'] }}</p>
                                    @endif
                                    @if ($match['status'] === 'IN_PLAY')
                                        <p class="text-red">Live : {{ $match['score']['fullTime']['home'] }} -
                                            {{ $match['score']['fullTime']['away'] }}</p>
                                    @endif
                                    @if ($match['status'] === 'FINISHED')
                                        <p class="text-red">Finished : {{ $match['score']['fullTime']['home'] }} -
                                            {{ $match['score']['fullTime']['away'] }}</p>
                                    @endif
                                    @if ($match['status'] === 'PAUSED')
                                        <p>PAUSED : {{ $match['utcDate'] }}</p>
                                    @endif
                                    @if ($match['status'] === 'POSTPONED')
                                        <p>POSTPONED : {{ $match['utcDate'] }}</p>
                                    @endif

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 shadow-lg relative overflow-hidden bg-cover bg-center bg-white dark:bg-gray-700">

            </div>
        </div>
        {{-- ||||-- ANIME ----||||||||||||||||||||||||||||||------- --}}
        <div class=" font-bold text-black text-2xl dark:text-white">
            {{ $recType }} recommended by the weather for your city<span
                class="p-1 ml-4 rounded-lg w-4 h-2 bg-cyan-400 text-black text-xs">alpha</span>
        </div>
        <div class="flex flex-col my-4">
            <div class="flex overflow-x-scroll text-black dark:text-white pb-6 hide-scroll-bar" style="padding: 1.5rem">
                @foreach ($animes as $anime)
                    <div class="shadow-lg flex flex-col justify-start ml-4 items-center p-0 pl-10 rounded-lg bg-white dark:bg-gray-700"
                        style="width: 14rem; background: url('{{ $anime['attributes']['posterImage']['medium'] }}'); background-size:cover; background-position: center;">
                        <div class="flex flex-col shadow-lg justify-end h-80"
                            style="width:12rem; background: linear-gradient(45deg, black, transparent);">
                            <p class="text-xl ml-2 pb-2 pl-2 font-bold overflow-hidden text-ellipsis">
                                {{ $anime['attributes']['titles']['en_jp'] }}
                                <?php
                                $rating = $anime['attributes']['averageRating'];
                                if ($rating < 30) {
                                    $color = 'text-red-400';
                                }
                                if ($rating > 30 and $rating < 50) {
                                    $color = 'text-orange-700';
                                }
                                if ($rating > 50 and $rating < 70) {
                                    $color = 'text-yellew-700';
                                }
                                if ($rating > 70) {
                                    $color = 'text-green-400';
                                }
                                ?>
                            </p><span>Average rating : <span class="{{ $color }}">{{ $rating }}</span></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        setInterval(showTime, 1000);

        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";

            if (hour > 12) {
                hour -= 12;
                am_pm = " PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = " AM";
            }

            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;

            let currentTime = hour + ":" +
                min + ":" + sec + am_pm;

            document.getElementById("clock")
                .innerHTML = currentTime;
        }

        function getImageLightness(imageSrc, callback) {
            var img = document.createElement("img");
            img.src = imageSrc;
            img.style.display = "none";
            img.crossOrigin = "anonymous";
            document.body.appendChild(img);

            var colorSum = 0;

            img.onload = function() {
                // create canvas
                var canvas = document.createElement("canvas");
                canvas.width = this.width;
                canvas.height = this.height;

                var ctx = canvas.getContext("2d");
                ctx.drawImage(this, 0, 0);

                var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                var data = imageData.data;
                var r, g, b, avg;

                for (var x = 0, len = data.length; x < len; x += 4) {
                    r = data[x];
                    g = data[x + 1];
                    b = data[x + 2];

                    avg = Math.floor((r + g + b) / 3);
                    colorSum += avg;
                }

                var brightness = Math.floor(colorSum / (this.width * this.height));
                callback(brightness);
            }

        };
        var urlimg = "{{ $photo['results'][0]['cover_photo']['urls']['regular'] }}";
        getImageLightness(urlimg, function(brightness) {

            var ely = document.querySelectorAll('.ttx');
            if (brightness > 150) {
                for (let i = 0; i < ely.length; i++) {
                    ely[i].style.color = 'black';
                }
            } else {
                for (let i = 0; i < ely.length; i++) {
                    ely[i].style.color = 'white';
                }
            }
        });
    </script>
@endsection
