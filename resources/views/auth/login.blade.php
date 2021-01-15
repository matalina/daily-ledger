<x-master>
    <x-page.title class="text-center">Login</x-page.title>
    <div class="w-100 md:w-1/4 mx-auto border rounded p-3">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label>Email</label>

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label>Password</label>

                <x-form.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

        
            <div class="flex items-center justify-end mt-4">
                <x-button.link class="" href="{{ route('password.request') }}">Lost Password?</x-button.link>

                <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">
                    Login
                </x-button>
            </div>
        </form>
    </div>
</x-master>
