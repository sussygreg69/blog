@extends('partials.layout')
@section('content')
    <div class="card bg-base-100 border-2px w-2/5 shadow-xl mx-auto my-auto">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <label class="form-control w-full max-w">
                    <div class="label">
                        <span class="label-text">Name</span>
                     </div>
                    <input type="text" name="name" placeholder="Type here" value="{{ old('name') }}" class="input input-bordered w-full max-w"/>
                    <div class="label">
                        @error('name')
                        <span class="label-text-alt input-error">{{ $message  }}</span>
                        @enderror
                    </div>
             </label>

             <label class="form-control w-full max-w">
                    <div class="label">
                     <span class="label-text">Email</span>
                    </div>
                    <input type="email" name="email" placeholder="Type here" value="{{ old('email') }}" class="input input-bordered w-full max-w" />
                    <div class="label">
                    @error('email')
                        <span class="label-text-alt">{{ $message  }}</span>
                    @enderror
                    </div>
                </label>

               <label class="form-control w-full max-w">
                  <div class="label">
                      <span class="label-text">Password</span>
                  </div>
                  <input type="password" class="input input-bordered w-full max-w" name="password" required autocomplete="new-password" />
                 <div class="label">
                 @error('password')
                    <span class="label-text-alt">{{ $message  }}</span>
                 @enderror
                 </div>
             </label>

                <label class="form-control w-full max-w">
              <div class="label">
               <span class="label-text">Confirm Password</span>
                 </div>
                   <input  id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input input-bordered w-full max-w" />
                   <div class="label">
                   @error('password_confirmation')
                    <span class="label-text-alt">{{ $message }}</span>
                    @enderror
                   </div>
                </label>

            <div class="flex items-center justify-start mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                   <x-primary-button class="ms-4 justify-end">
                      {{ __('Register') }}
                  </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection