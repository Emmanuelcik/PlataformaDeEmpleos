@extends('layouts.app')

@section('content')
<div class="container contenedor mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white border-2 shadow-ms mt-20">
                <div class="bg-gray-300 text-gray-700 uppercase text-center py-3 px-6 mb-0">
                    {{__("Reset Password")}}
                </div>
                    <form class="py-10 px-5" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>

                                <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password-confirm" class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>


                            <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-teal-500 w-full hover:bg-teal-700 text-gray-100 p-3 focus:online-none focus:shadow-outline uppercase font-bold">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
