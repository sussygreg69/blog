<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
    <label>
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full input input-bordered @error('current_password') input-error @enderror" autocomplete="current-password" />
            @error('current_password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
            <!--<x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> -->
        </div>

        <div class="mt-6">
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <input id="update_password_password" name="password" type="password" class="mt-1 block w-full input input-bordered @error('update_password_password') input-error @enderror" autocomplete="update_password_password" />
            @error('update_password_password')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
           <!-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> -->
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full input input-bordered @error('update_password_password') input-error @enderror" autocomplete="password_confirmation" />
            @error('password_confirmation')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
            <!--<x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> -->
        </div>

        <div class="flex items-center gap-4 mt-6">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
        </label>
    </form>
</section>
