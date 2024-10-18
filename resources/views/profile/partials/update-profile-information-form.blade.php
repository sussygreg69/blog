<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <label>
            <div>
                <div class="label">
                    <span class="label-text" :value="__('Name')">Name</span>
                </div>
            <input id="name" name="name" type="text" class="mt-1 block w-full input input-bordered @error('name') input-error @enderror"  required autofocus autocomplete="name" :value="old('name', $user->name)" />
                <div class="label">
                    @error('name')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
            </div>
        </label>
            <!--<x-input-error class="mt-2" :messages="$errors->get('name')" />-->
        </div>
    
        <div>
            <div class="label">
            <span class="label-text" :value="__('Email')">Email</span>
            </div>
            <input id="email" name="email" type="email" class="mt-1 block w-full input input-bordered @error('email') input-error @enderror" required autocomplete="username":value="old('email', $user->email)"/>
            @error('email')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror           
            <!--<x-input-error class="mt-2" :messages="$errors->get('email')" />-->

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-error">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
</label>
        <div class="flex items-center gap-4">
            <button class="btn btn-neutral">{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
