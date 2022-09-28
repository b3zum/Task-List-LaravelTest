<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('profile.edit') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-label for="name" :value="__('Name')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :
                         value="{{Request::old('name') ?: Auth::user()->name}}"/>
            </div>

            <div class="mt-4">
                <x-label for="image"/>
                <div>
                    <img src="{{ url(Auth::user()->profile->profileImage) }}">
                </div>

                <x-input id="image" class="block mt-1 w-full" type="file" name="image"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('change') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
