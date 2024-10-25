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

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Current Password</span>
            </div>
            <input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                placeholder="Current Password" 
                class="mt-1 block w-full input input-bordered @error('current_password') input-error @enderror" 
                autocomplete="current-password" 
            />
            <div class="label">
                @error('current_password')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">New Password</span>
            </div>
            <input 
                id="update_password_password" 
                name="password" 
                type="password" 
                placeholder="New Password" 
                class="mt-1 block w-full input input-bordered @error('password') input-error @enderror" 
                autocomplete="new-password" 
            />
            <div class="label">
                @error('password')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Confirm Password</span>
            </div>
            <input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                placeholder="Confirm Password" 
                class="mt-1 block w-full input input-bordered @error('password_confirmation') input-error @enderror" 
                autocomplete="new-password" 
            />
            <div class="label">
                @error('password_confirmation')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div class="flex justify-between mt-6">
            <input 
                type="submit" 
                class="btn btn-primary @error('current_password') border-red-500 @enderror @error('password') border-red-500 @enderror @error('password_confirmation') border-red-500 @enderror" 
                value="{{ __('Save') }}" 
            />

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
    </form>
</section>
