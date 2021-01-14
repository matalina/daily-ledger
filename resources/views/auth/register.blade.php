<x-master>
    <x-page.title class="text-center">Create New Account</x-page.title>
    <div class="w-100 md:w-1/4 mx-auto border rounded p-3">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label>Name</label>

                <x-form.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label>Emai<label>

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Password</label>

                <x-form.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label>Password Comfirmation<label>

                <x-form.input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">
                    Register
                </x-button.submit>
            </div>
        </form>
    </div>
</x-master>
