
    @extends('master.layout')
@section('title')
    Login
@endsection
@section('style')
<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
@endsection
@section('nav')
    @extends('master.nav')
@endsection
@section('body')
    <section class="min-h-screen flex-col lg:flex-row flex items-stretch ">
        <div class="flex lg:h-screen h-1/4 w-full lg:w-3/5 bg-no-repeat bg-cover relative items-center" style="background-image: url(https://media.gmanga.me/uploads/releases/mrxatom/021-20200412143142361734GYQ8OJ0U/hq_webp/Untitled1124_20200412171641.webp);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full text-center lg:px-24 px-14  z-10">
                <h1 class="lg:text-5xl lg:py-0 py-20 text-3xl font-bold text-left tracking-wide text-white">Welcome back!</h1>
                <p class="lg:text-3xl lg:block hidden text-xl my-4 text-white">You return to the right place, anywhere.</p>
            </div>
        </div>
        <div class="lg:w-2/5 w-full h-screen lg:h-screen flex items-center justify-center text-center md:px-16 px-0 z-0">
            <div class="p-10 card bg-base-200 h-11/12">
                <p class="font-extrabold text-2xl">Log in to AdenTime</p>
                <p class="font-bold text-xl opacity-80">Complete all required feilds and Submit to Enter</p>
                <form action="{{ asset('login') }}" method="POST" class="form-control space-y-4 items-center mt-12">
                    @csrf
                    <div class="w-4/5">
                        <label class="label">
                        <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="hello@world.com" class="input w-full  @if (session('status')){{ 'input-error input-bordered' }}@endif">
                    </div>
                    <div class="w-4/5">
                        <label class="label">
                        <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="*********" class="input w-full @if (session('status')){{ 'input-error input-bordered' }}@endif ">
                    </div>
                    <div class="w-4/5">
                        <label class="cursor-pointer label">
                        <span class="label-text">Remember me</span>
                        <input type="checkbox"  name="remember" id="remember" checked="checked" class="checkbox checkbox-accent">
                        </label>
                    </div>
                     @if (session('status'))
                     <div class="w-4/5 flex">
                        <p class="p-2 bg-error text-sm">{{ session('status') }}</p>
                    </div>
                     @endif
                    <div class="w-4/5 flex">
                        <button type="submit" class="btn btn-primary btn-active" role="button" aria-pressed="true">Login</button>
                    </div>
                </form>
                    dont have an account yet, <a href="{{ route('signup') }}"> Register</a>
            </div>

        </div>
    </section>


@endsection
@section('script')

@endsection


