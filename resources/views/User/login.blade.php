@extends('components.BlankPage')

@section('title', 'Login')

@section('content')

    <div class="flex">
        <div>
            <form action="/login" method="POST" class="bg-P p-7">
                @csrf
                <div class="mt-5">
                    <label for="name" class="text-white font-medium">Name</label>
                    @error('name')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    <input type="name" class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white"
                        name="name" value="{{ old('name') }}">
                </div>

                <div class="mt-5">
                    <label for="password" class="text-white font-medium">Password</label>
                    @error('password')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    <input type="password"
                        class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white" name="password"
                        value="{{ old('password') }}">
                </div>
                <div class="mt-5">
                    <button type="submit">Login</button>
                </div>
                <p>Don't have a account? <a href="/signup">Sign up</a></p>
            </form>
        </div>
    </div>
@endsection
