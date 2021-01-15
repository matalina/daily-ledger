<x-master>
    <x-page.title class="text-center">Lost Password</x-page.title>
    <div class="w-100 md:w-1/4 mx-auto border rounded p-3">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label>Email</label>

                <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button.submit class="bg-gray-100 border-gray-600 text-gray-600">
                    Email Reset Password Link
                </x-button.submit>
            </div>
        </form>
    </div>
</x-master>
