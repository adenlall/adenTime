@extends('master.layout')
@section('title')
    Welcome
@endsection
@section('style')
<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
@endsection
@section('nav')
    @extends('master.nav')
@endsection
@section('body')


<div class="hero min-h-screen bg-base-200">
  <div class="flex-col hero-content lg:flex-row-reverse">
    <img src="https://wallpaperaccess.com/full/2326521.jpg" class="lg:max-w-80 w-80 rounded-lg shadow-2xl">
    <div>
      <h1 class="mb-5 text-5xl font-bold">
            Time is a power
          </h1>
      <p class="mb-5">
            Register now and organized your time with your own dashboard. <span class="font-bold">Its Free</span>
          </p>
      <a href="{{ route('signup') }}"><button class="btn btn-primary">Get Started</button></a>
    </div>
  </div>
</div>

{{-------- SECTION TWO --------}}
<div class="w-full shadow stats lg:grid-flow-col grid-flow-row">
  <div class="stat">
    <div class="stat-figure text-primary">
        <x-heroicon-o-user-group width="40" height="40"/>
    </div>
    <div class="stat-title">Total Members</div>
    <div class="stat-value text-primary">40</div>
    <div class="stat-desc">22% more than last month</div>
  </div>
  <div class="stat">
    <x-heroicon-o-view-grid width="40" height="40"/>
    <div class="stat-title">Page Views</div>
    <div class="stat-value text-info">260</div>
    <div class="stat-desc">41% more than last month</div>
  </div>
  <div class="stat">
    <div class="stat-figure text-info">
      <div class="avatar online">
        <div class="w-16 h-16 p-1 mask mask-squircle bg-base-100">
          <img src="https://avatars.githubusercontent.com/u/91727676?v=4" alt="Avatar Tailwind CSS Component" class="mask mask-squircle">
        </div>
      </div>
    </div>
    <div class="stat-value">70%</div>
    <div class="stat-title">Tasks done</div>
    <div class="stat-desc text-info">5 tasks remaining</div>
  </div>
</div>
{{-------- SECTION TWO --------}}

{{-------- SECTION THREE --------}}
<div class="p-4 flex flex-col items-center lg:flex-row rounded-lg mt-20 shadow-2xl bg-accent m-auto w-4/5">
    <div class="w-full h-80 m-4 rounded-lg space-y-4"style="background: url('https://ih1.redbubble.net/image.546994663.6095/flat,750x1000,075,t.u1.jpg'); background-size:cover; background-position:center;" ></div>
    <div class="flex flex-col p-4  w-full text-4xl font-bold space-y-4">
        From Students to everybody
        <span class="text-xl opacity-80 my-3">so get sur to try it and give your feedback about UI and code quality.<span><br>
        <a target="_blank" href="https://github.com/adenlall"><button class="btn btn-primary my-3">Github</button></a>
    </div>
</div>
{{-------- SECTION FOUR --------}}
<p class="text-base-100 my-4">Stack used</p>
<div class="flex flex-col lg:items-start items-stretch p-8 w-full bg-neutral-focus my-16 space-x-0 space-y-8 lg:space-x-8 lg:space-y-0 lg:flex-row ">
    <div class="flex flex-row items-stretch p-7 bg-base-100 rounded-lg w-full space-x-8 space-y-0 m-0 lg:space-x-0 lg:space-y-8 lg:w-1/5 lg:flex-col overflow-scroll lg:overflow-scroll">
        <div class="xbtnx btn btn-primary btn-lg"><x-si-laravel width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-si-symfony width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-heroicon-o-clock width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-iconoir-carbon width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-fileicon-moment width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-si-tailwindcss width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-iconoir-ruler-add width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-iconoir-ruler-add width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-iconoir-color-picker width="40" height="45" /></div>
        <div class="xbtnx btn btn-primary btn-lg"><x-si-heroku width="40" height="45" /></div>
    </div>
    <div class="flex flex-col p-16 bg-base-100 rounded-lg m-0 lg:m-8 lg:w-4/5 w-full lg:sticky lg:top-4" style="height: 94vh;">
        <p class="lg:text-7xl text-3xl font-black xtitle"><x-bxl-php width="65" height="65" /></p>
        <p class="font-bold text-2xl xsemi">PHP Powerful</p>
        <p class="lg:text-3xl text-xl xdisc">Strong, Flexible, Powerful, Its php</p>
    </div>
</div>
{{-------- FIVE --------}}
<div class="rectangle1">
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-6170063612762128";
        /* Rectangle-1 */
        google_ad_slot = "3754049196";
        google_ad_width = 336;
        google_ad_height = 280;
        //-->
    </script>
    <script type="text/javascript"
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6170063612762128">
    </script>
</div>
{{-------- FIVE --------}}

<div class="flex lg:flex-row flex-col justify-center content-center items-center space-y-4 lg:space-y-0 lg:items-end space-x-0 lg:space-x-4 mb-16 mx-12">
    <p class="font-extrabold text-4xl">Get started now, and Build a new vision of you</p>
    <a href="{{ route('signup') }}"><button class="btn btn-primary btn-sm">Get started</button></a>
</div>
{{-------- FIVE --------}}


@endsection
{{-------- FOOTER --------}}
@section('footer')
    @include('master.footer')
@endsection
{{-------- END --------}}
@section('script')
<script>



const stack_data = [
    'Free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony.',
    'A PHP web framework is a collection of classes, which helps to develop a web application. Symfony is an open-source MVC framework for rapidly developing modern web',
    'A PHP plugin detect a users location by their IP Address.',
    'A simple PHP API extension for DateTime.',
    'MomentJS is a JavaScript library which helps is parsing, validating, manipulating and displaying date/time in JavaScript in a very easy way.',
    'Tailwind CSS. Tailwind CSS is basically a Utility first CSS framework for building rapid custom UI. It is a highly customizable.',
    'daisyUI is a customizable Tailwind CSS component library that prevents verbose markup in frontend applications. With a focus on customizing and creating themes for users.',
    'Blade UI kit is a great set of renderless components for Laravel that let you focus on the parts of your application that are unique, rather than endless boilerplate and expanding snippets.',
    'Change CSS theme with toggle, buttons or select using CSS Variables and localStorage.',
    'Cloud platform as a service supporting several programming languages. One of the first cloud platforms.',
]
const stack_items = [
    'laravel',
    'Symfony',
    'Stevebauman',
    'Carbon',
    'Moment js',
    'Tailwindcss',
    'Daisyui',
    'Blade-UI-kit',
    'Theme-change',
    'Heroku',
]

for (let i = 0; i < stack_items.length; i++) {
    document.querySelectorAll('.xbtnx')[i].addEventListener('click', function () {
        document.querySelector('.xtitle').innerHTML = stack_items[i];
        document.querySelector('.xsemi').style.display = 'none';
        document.querySelector('.xdisc').innerHTML = stack_data[i];
    })
}

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

