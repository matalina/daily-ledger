<x-master>
    <x-calendar.nav
        :type="$type"
        :prev="route('dashboard.calendar', ['type' => $type, 'year' => $start->format('Y'),
            'month' => $start->format('m'), 'day' => $start->day - 1])"
        :next="route('dashboard.calendar', ['type' => $type, 'year' => $start->format('Y'),
        'month' => $start->format('m'), 'day' => $start->day + 1])"
    >
        <x-slot name="prev_text">
            {{ $start->copy()->subDay()->format('l F j, Y') }}
        </x-slot>

        <x-slot name="next_text">
            {{ $start->copy()->addDay()->format('l F j, Y') }}
        </x-slot>

        <x-slot name="current_text">
            {{ $start->format('l F j, Y') }}
        </x-slot>
    </x-calendar.nav>
</x-master>