<x-master>
    <x-calendar.nav
        :type="$type"
        :prev="route('dashboard.calendar', 
            ['type' => $type, 'year' => $start->$type - 1])"
        :next="route('dashboard.calendar', 
            ['type' => $type, 'year' => $start->$type + 1])"
    >
        <x-slot name="prev_text">
            {{ $start->$type - 1 }}
        </x-slot>

        <x-slot name="next_text">
            {{ $start->$type + 1 }}
        </x-slot>

        <x-slot name="current_text">
            {{ $start->$type }}
        </x-slot>
    </x-calendar.nav>
</x-master>