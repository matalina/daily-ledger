<div class="p-3">
    <h3 class="font-bold text-xl text-center">
        <a href="{{ route('dashboard.calendar',
            ['type' => 'month', 'year' => $date->format('Y'), 'month' => $date->format('m')]) }}">
            {{ $date->format('F') }}
        </a>
    </h3>
    <div class="grid grid-cols-7">
        <div class="font-bold border-b text-center p-1">S</div>
        <div class="font-bold border-b text-center p-1">M</div>
        <div class="font-bold border-b text-center p-1">T</div>
        <div class="font-bold border-b text-center p-1">W</div>
        <div class="font-bold border-b text-center p-1">T</div>
        <div class="font-bold border-b text-center p-1">F</div>
        <div class="font-bold border-b text-center p-1">S</div>
        @for($i = 0; $i < $date->dayOfWeek; $i++)
            <div class="text-center p-1"></div>
        @endfor
        @for($i = 1; $i <= $date->daysInMonth; $i++)
        <div class="text-center p-1">
            <a href="{{ route('dashboard.calendar',
                ['type' => 'daily', 'year' => $date->format('Y'), 'month' => $date->format('m'), 'day' => str_pad($i,2,'0',STR_PAD_LEFT)]) }}">
            {{ $i }}
            </a>
        </div> 
        @endfor
    </div>
</div>