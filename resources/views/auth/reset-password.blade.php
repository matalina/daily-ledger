<x-master>
    <x-page.title class="text-center">Reset Password</x-page.title>
    <div class="w-100 md:w-1/4 mx-auto border rounded p-3">

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label>Email</label>

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label>Password</label>

                <x-form.input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label>Comfirm Password</label>

                <x-form.input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">
                    Reset Password
                </x-button.submit>
            </div>
        </form>
    </div>
</x-master>
