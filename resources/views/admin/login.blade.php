

@extends('layouts.app')

@section('content')

<div class=" grid lg:grid-cols-2 sm:grid-cols-1 min-[320px]:grid-cols-1 items-center justify-items-center mt-12">
    <div class="mx-8 my-5">
        <img src="/assets/images/ga-team-4.jpg" class="rounded-[20px] shadow-lg">
    </div>
    
    <div class="">
        <div class="grid grid-cols-1 justify-items-center mb-4">
            <div class="relative">
                <img src="{{asset('assets/images/greenap-logo-3d.png')}}" class="h-12"/>
                {{-- <span class="rounded-full px-2 py-1 bg-muesli  text-xs font-bold text-caper absolute top-0 left-0"><i class="fa-solid fa-user-tie me-1"></i>Admin</span> --}}
            </div>
            
        </div>
        <form action="" class="">
            <div class="grid grid-cols-1 gap-y-4 mb-3">
                <input type="text" class="bg-black-white block w-full p-4 text-muesli font-bold border-2 border-coriander focus:drop-shadow-caper focus:ring-0 focus:outline-0 focus:border-muesli text-xs placeholder:text-muesli" placeholder="Username / Email">
                
                <div class="">
                    <input type="password" class="bg-black-white block w-full p-4 text-muesli mb-1 font-bold border-2 border-coriander focus:ring-0 focus:outline-0 focus:border-muesli focus:drop-shadow-caper text-xs placeholder:text-muesli" placeholder="Password">
                    <a href="" class="font-bold text-center text-muesli text-xs hover:text-caper">Forgot your password?</a>
                </div>  

                <div class="flex items-center justify-center">
                    <input type="checkbox" name="remember" id="remember" class="border-muesli outline-0 focus:outline-0 focus:ring-muesli  text-muesli focus:border-muesli">       
                    <label for="remember" class="font-bold text-muesli text-xs ms-2">Remember Me</label>
                </div>  
            </div>
            <div class="grid gap-y-2">
                <button type="submit" class="mt-3 w-full bg-muesli rounded-none px-4 py-2 text-white font-bold hover:drop-shadow-caper">Login</button>
                <div class=" border-t-2 border-muesli my-4"></div>
                <button type="button" onclick="location.href='{{ url('admin/auth/facebook') }}'" class=" bg-facebook text-white font-bold px-4 py-2 hover:drop-shadow-caper"><i class="fa-brands fa-facebook me-2"></i>Login with Facebook</button>
            </div>
        </form> 
    </div>
</div>
    
@endsection

