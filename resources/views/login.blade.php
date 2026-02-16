@extends('layout')
@section('title', 'Login Page')
@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <form method="POST" action=" {{ route('login.attempt') }} " class="max-w-sm mx-auto">
            <div class="mb-5">
                <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                <input type="email" id="email" name="email" class="border text-sm rounded-md focus:border-black w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="ecsimple13@gmail.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Password</label>
                <input type="password" id="password" name="password" class="border text-sm rounded-md focus:border-black w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="••••••••" required />
            </div>
            <label for="remember" class="flex items-center mb-5">
                <input id="remember" type="checkbox" value="" name="remember" class="w-4 h-4 border border-default-medium rounded-xs bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft" required />
                <p class="ms-2 text-sm font-medium text-heading select-none">I agree with the <a href="#" class="text-fg-brand hover:underline">terms and conditions</a>.</p>
            </label>
            <button type="submit" class="text-white border-none bg-blue-500 hover:bg-blue-700 leading-5 py-3 px-7 rounded-md text-lg focus:outline-none">Submit</button>
        </form>
    </div>
@endsection
