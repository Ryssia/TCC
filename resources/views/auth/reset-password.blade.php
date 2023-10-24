<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="reset-password">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('reset-password') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="form-floating mb-3" style="width: 80%;">
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="form-floating mb-3" style="width: 80%;">
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="form-control" type="password" name="password" required />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="form-floating mb-3" style="width: 80%;">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col d-flex justify-content-center">
                    <x-button>
                        {{ __('Reset Password') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
