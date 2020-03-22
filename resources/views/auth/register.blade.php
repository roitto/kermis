@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-full w-full">
        @component('components.card')
            <div class="text-lg text-bold text-gray-600 my-2">
                {{ __('Register') }}
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-input 
                        id="name"
                        type="text"
                        name="name"
                        autocomplete="name"
                        :label="__('Name')"
                        :value="old('name')"
                        required
                    />

                    <x-input 
                        id="email"
                        type="email"
                        name="email"
                        autocomplete="email"
                        :label="__('E-Mail Address')"
                        :value="old('email')"
                        required
                    />

                    <x-input 
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="new-password"
                        :label="__('Password')"
                        value=""
                        required
                    />

                    <x-input 
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        autocomplete="new-password"
                        :label="__('Confirm Password')"
                        value=""
                        required
                    />

                    <x-button>
                        {{ __('Register') }}
                    </x-button> 
                </form>
            </div>
        @endcomponent
    </div>
@endsection
