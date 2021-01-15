<x-master>
    <x-calendar.nav
        :type="$type"
        :prev="route('dashboard.calendar', ['type' => $type, 'year' => $start->$type - 1])"
        :next="route('dashboard.calendar', ['type' => $type, 'year' => $start->$type + 1])"
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
    <div class="grid grid-cols-4 grid-rows-3">
        @while($start->lte($end))
            <x-calendar.mini :date="$start">
            </x-calendar.mini>
            @php
                $start->addMonth();  
            @endphp
        @endwhile
    </div>
</x-master>