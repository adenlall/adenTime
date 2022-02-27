<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use SebastianBergmann\CodeCoverage\Percentage;
use Stevebauman\Location\Facades\Location;


class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Request $request)
    {



        // config
        if(env('APP_ENV') === 'local'){$ip = "1.1.72.208";}
        if(env('APP_ENV') === 'production'){$ip = $request->ip();}
        $position = Location::get($ip);
        $timeOut = now()->addMicroseconds(10);
        $openweatherKEY = '640dd62032cdb0fa31d41c05f34c215a';
        $unsplashKEY = 'sz0VEajnSgEOt23cZAJ72OK5ULROCZ8PweUFN3S6AEg';
        $footballdataKEY = '32c10ff811b644ce85cab7ba0189b94a';      //  00e6d72f72024a5a90b3c1fdfa3b0ba8 2th API token
        $country = str_replace(' ', '+', $position->countryName);
        $lat = $position->latitude;
        $lon = $position->longitude;
        $tz = Auth()->User()->timezone;
        $current = Carbon::now($tz)->format('Y-m-d');
        $var_f = auth()->user()->compitition; // UEFA Champions League
        $var_f_db = $var_f;
        $rec_type = Auth()->User()->recommendation;
        // $var_f_db = '';
        // $rec_type = '';
        $comArr = [
            'UEFA Champions League'     => '2001',
            'Premier League'            => '2021',
            'Serie A'                   => '2019',
            'Primera Division'          => '2014',
            'Bundesliga'                => '2002',
            'Ligue 1'                   => '2015',
        ];
        $aniArr = [
            'anime' => 'anime',
            'manga' => 'manga',
        ];

        // select the compitition
        for ($i = 0; $i < count($comArr); $i++) {
            $var_f_db = $var_f;
            if ($var_f_db === array_keys($comArr)[$i]) {
                $var_f_db = array_keys($comArr)[$i];
                break;
            };
            $var_f_db = 'UEFA Champions League';
        };

        // select type of recommendation
        if ($rec_type = @$aniArr[$rec_type]) {
            $rec_type = $aniArr[$rec_type];
        } else {
            $rec_type = 'anime';
        }

        $competition = $comArr[$var_f_db];


        // API fetch



        $urlop = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$openweatherKEY}";
        $resop = Http::get($urlop)->json();
        $urlun = "https://api.unsplash.com/search/collections?page=1&query={$resop['weather'][0]['description']}&per_page=2&client_id={$unsplashKEY}";
        $resun = Http::get($urlun)->json();
        $urlho = "https://api.api-ninjas.com/v1/holidays?country={$country}&year=2022";

        $resho = cache()->remember('resho', $timeOut, function () use ($urlho) {
            return Http::withHeaders([
                'X-Api-Key' => 'TLUwtlMYKxG/JH1HK0LY8Q==gqLNjf8vrAvxZwxh'
            ])->get($urlho)->json();
        });
        // Convert weather to moods
        $mood_weather = $resop['weather'][0]['main'];
        $cateArr = [
            'Clear'       =>       ['adventure',    'Action',        'Sports'],
            'Clouds'      =>       ['Historical',   'Psychological', 'Horror'],
            'Drizzle'     =>       ['Slice-of-Life', 'School-Life',   'Historical'],
            'Rain'        =>       ['Romance',      'Drama',         'adventure'],
            'Thunderstorm' =>       ['Horror',       'Historical',    'Psychological'],
            'Mist'        =>       ['Historical',   'Sports',        'Slice-of-Life'],
            'Snow'        =>       ['Supernatural', 'Drama',         'Demon'],
        ];
        // generate Percentage
        $num = rand(1, 100);
        $out = 0; // initial value
        if ($num >= 50) $out = 0; // $out = 0; in 50%
        if ($num <= 33) $out = 1; // $out = 0; in 33%
        if ($num <= 17) $out = 1; // $out = 0; in 17%

        // dd($mood_weather, $out);
        $category = $cateArr[$mood_weather][$out];

        $urlan = "https://kitsu.io/api/edge/{$rec_type}?sort=popularityRank&filter[categories]={$category}";

        $resan = cache()->remember('resan', $timeOut, function () use ($urlan) {
            return Http::get($urlan)->json();
        });


        $urlfo_c = "http://api.football-data.org/v3/competitions/{$competition}";
        // $urlfo_m = "http://api.football-data.org/v3/competitions/{$competition}/matches?status=SCHEDULED&matchday=27";
        $resfo_c = cache()->remember('resoos', $timeOut, function () use ($footballdataKEY, $urlfo_c) {
            return Http::withHeaders([
                'X-Auth-Token' => "{$footballdataKEY}"
            ])->get($urlfo_c)->json();
        });
        $urlfo_m = "http://api.football-data.org/v3/competitions/{$competition}/matches?matchday={$resfo_c['currentSeason']['currentMatchday']}";
        $urlfo_t = "http://api.football-data.org/v3/competitions/{$competition}/teams?season=2021";
        $resfo_m = cache()->remember('resoos', $timeOut, function () use ($footballdataKEY, $urlfo_m) {
            return Http::withHeaders([
                'X-Auth-Token' => "{$footballdataKEY}"
            ])->get($urlfo_m)->json();
        });
        $resfo_t = cache()->remember('resoos', $timeOut, function () use ($footballdataKEY, $urlfo_t) {
            return Http::withHeaders([
                'X-Auth-Token' => "{$footballdataKEY}"
            ])->get($urlfo_t)->json();
        });

        // config Holidays
        foreach ($resho as $key => $row) {
            $count[$key] = $row['date'];
        }
        array_multisort($count, SORT_DESC, $resho);
        $holiArr = array_column($resho, 'date');

        function x($arr, $i)
        {
            sort($arr);
            foreach ($arr as $num) {
                if (
                    $num >= $i
                ) {
                    return $num;
                    break;
                }
            }
        };
        $key = array_search(
            x($holiArr, $current),
            array_column($resho, 'date')
        );




        // dd($resan);
        // return
        return view('dashboard')->with([
            'ip' => $ip,
            'weather' => $resop,
            'photo' => $resun,
            'holiday' => $resho[$key],
            'holidays' => $resho[$key + 1],
            'animes' => $resan['data'],
            'compitition' => $resfo_c,
            'matches' => $resfo_m['matches'],
            'teams' => $resfo_t['teams'],
            'recType' => $rec_type,
        ]);
    }
}
