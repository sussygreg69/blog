<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
        @csrf
        @method('delete')

        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Password</span>
            </div>
            <input 
                id="delete_account_password" 
                name="password" 
                type="password" 
                placeholder="Enter your password" 
                class="mt-1 block w-full input input-bordered @error('password') input-error @enderror" 
                autocomplete="current-password" 
            />
            <div class="label">
                @error('password')
                    <span class="label-text-alt text-error">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div class="flex items-center gap-4 mt-6">
            <input 
                type="submit" 
                class="btn btn-error @error('password') border-red-500 @enderror" 
                value="{{ __(key: 'Delete Account') }}" 
            />

            @if (session('status') === 'account-deleted')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Your account has been deleted.') }}</p>
            @endif
        </div>
    </form>
</section>
