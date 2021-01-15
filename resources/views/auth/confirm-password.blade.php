<x-master>
    <x-page.title class="text-center">Create New Account</x-page.title>
    <div class="w-100 md:w-1/4 mx-auto border rounded p-3">

        <div class="mb-4 text-sm text-gray-600">
            This is a secure area of the application. Please confirm your password before continuing.
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <label>Password</label>

                <x-form.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">
                    Confirm
                </x-button>
            </div>
        </form>
    </div>
</x-master>
