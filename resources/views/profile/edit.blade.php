@extends('partials.layout')

@section('content')
    <div class="card w-2/4 mx-auto my-auto bg-base-100 shadow-lg">
        <div class="card-body">
            <x-slot name="header">
                <h2 class="font-semibold text-xl leading-tight">
                    {{ __('Profile') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto space-y-6">
                    <div class="p-4 sm:p-8 bg-base-200 rounded-lg shadow-md">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-base-200 rounded-lg shadow-md">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-base-200 rounded-lg shadow-md">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection