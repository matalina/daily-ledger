<button
    {{ $attributes->merge(['class' => 'p-2 border rounded mr-2 mb-2 inline-block w-100'])}}
    type="submit"
>
    {{ $slot }}
</button>