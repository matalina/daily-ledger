<form 
    {{ $attributes->filter(function($value, $key) {
        return $key != 'class';
    }) }}
    class="inline-block"
>
    @csrf

    <x-button.submit
        {{ $attributes }}
    >
        {{ $slot }}
    </x-button.submit>
</form>