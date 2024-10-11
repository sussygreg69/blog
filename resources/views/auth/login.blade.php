@extends('partials.layout')
@section('content')
    <div class="card bg-base-100 border-2px w-2/5 shadow-xl mx-auto my-auto">
        <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label class="form-control w-full max-w">
                    <div class="label">
                        <span class="label-text">Email</span>
                     </div>
                    <input type="text" name="email" placeholder="Type here" value="{{ old('email') }}" class="input input-bordered w-full max-w"/>
                    <div class="label">
                        @error('email')
                        <span class="label-text-alt input-error">{{ $message  }}</span>
                        @enderror
                    </div>
        <!-- Password -->

        <label class="form-control w-full max-w">
                  <div class="label">
                      <span class="label-text">Password</span>
                  </div>
                  <input type="password" class="input input-bordered w-full max-w" name="password" required autocomplete="current-password" />
                 <div class="label">
                 @error('password')
                    <span class="label-text-alt">{{ $message  }}</span>
                 @enderror
                 </div>
             </label>
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="toggle toggle-success" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>    

