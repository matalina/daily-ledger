<nav class="flex text-2xl">
    <div class="p-3">
        <a href="{{ $prev }}">
            <i class="fad fa-arrow-square-left fa-fw"></i> {{ $prev_text }}
        </a>
    </div>
    <div class="flex-grow text-center p-3">
        {{ $current_text }}
    </div>
    <div class="p-3">
        <a href="{{ $next }}">
            {{ $next_text }} <i class="fad fa-arrow-square-right fa-fw"></i>
        </a>
    </div>
    <x-calendar.tabs :type="$type"></x-calendar.tabs>
</nav>