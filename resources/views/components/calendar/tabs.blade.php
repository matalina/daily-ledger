<div class="p-3">
    <a href="{{ route('dashboard.calendar',['type' => 'year']) }}" class="{{ $type=='year'?'text-red-500':'' }}">
        <i class="fad fa-calendar fa-fw"></i>
    </a>
    <a href="{{ route('dashboard.calendar',['type' => 'month']) }}" class="{{ $type=='month'?'text-red-500':'' }}">
        <i class="fad fa-calendar-alt fa-fw"></i>
    </a>
    <a href="{{ route('dashboard.calendar',['type' => 'week']) }}" class="{{ $type=='week'?'text-red-500':'' }}">
        <i class="fad fa-calendar-week fa-fw"></i>
    </a>
    <a href="{{ route('dashboard.calendar',['type' => 'daily']) }}" class="{{ $type=='daily'?'text-red-500':'' }}">
        <i class="fad fa-calendar-day fa-fw"></i>
    </a>
</div>