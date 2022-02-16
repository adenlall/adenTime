



    @extends('master.layout')
@section('title')
    Signup
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
                <h1 class="lg:text-5xl lg:py-0 py-20 text-3xl font-bold text-left tracking-wide text-white">Let's start!</h1>
                <p class="lg:text-3xl lg:block hidden text-xl my-4 text-white">Free, no spam, for you.</p>
            </div>
        </div>
        <div class="lg:w-2/5 w-full h-screen lg:h-screen flex items-center justify-center text-center px-0 z-0">
            <div class="card bg-base-200 w-full h-full items-center overflow-scroll">
                <p class="font-extrabold text-2xl w-4/5 mt-4">Create an account on AdenTime</p>
                <form action="{{ asset('signup')}}" method="POST" class="form-control space-y-2 items-center mt-20">
                    @csrf
                    <div class="w-4/5 flex flex-row items-center space-x-2">
                        <div class="w-1/2">
                            <label class="label">
                            <span class="label-text">First Name</span>
                            </label>
                            <input type="text" name="fname" placeholder="hello" class="input w-full  @error('fname') {{' input-error input-bordered '}} @enderror">
                        </div>
                        <div class="w-1/2">
                            <label class="label">
                            <span class="label-text">Last Name</span>
                            </label>
                            <input type="text" name="lname" placeholder="world" class="input w-full  @error('fname') {{' input-error input-bordered '}} @enderror">
                        </div>
                    </div>
                    @error('fname')
                            <label class="label p-1 m-0">
                                <span class="label-text-alt">{{ $message }}</span>
                            </label>
                    @enderror
                    @error('lname')
                            <label class="label p-1 m-0">
                                <span class="label-text-alt">{{ $message }}</span>
                            </label>
                    @enderror
                    <div class="w-4/5 @error('lname'){{ 'm-0' }} @enderror ">
                        <label class="label">
                        <span class="label-text">Username</span>
                        </label>
                        <input type="text" name="username" placeholder="helloworld7633" class="input w-full @error('fname') {{' input-error input-bordered '}} @enderror ">
                        @error('username')
                            <label class="label">
                                <span class="label-text-alt">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="w-4/5">
                        <label class="label">
                        <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="hello@world.com" class="input w-full @error('fname') {{' input-error input-bordered '}} @enderror">
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="w-4/5">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="*********" class="input w-full @error('fname') {{' input-error input-bordered '}} @enderror ">
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="w-4/5">
                        <label class="label">
                        <span class="label-text">Confirm Password</span>
                        </label>
                        <input type="password" name="password_confirmation" placeholder="*********" class="input w-full ">
                    </div>

                    <input type="hidden" name="timezone" id="timezone">

                    @error('timezone')
                        <div class="w-4/5 flex">
                            <p class="p-2 bg-error text-sm">{{ $message }}</p>
                        </div>
                    @enderror

                    <div class="w-4/5 flex">
                        <button type="submit" class="btn btn-primary btn-active" role="button" aria-pressed="true">Signup</button>
                    </div>
                </form>
                    already have an account, <a href="{{ route('login') }}"> login</a>
            </div>

        </div>
    </section>


@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
<script>
        // guess user timezone
        document.querySelector('input[name="timezone"]').value = moment.tz.guess();
</script>
@endsection
