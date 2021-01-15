<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    public function index($type = null, $year = null, $month = null, $day = null)
    {
        $user = auth()->user();

        if($type == null) {
            // get default
            $type = $user->getSettings('default.calendar');
        }

        if($year == null) {
            $year = date('Y');
        }
        if($month == null) {
            $month = date('m');
        }
        if($day == null) {
            $day = date('d');
        }

        $date = Carbon::createFromDate($year, $month, $day)->startOfDay();

        switch($type) {
            case 'year':
                $start = $date->copy()->startOfYear();
                $end = $date->copy()->endOfYear();
                break;
            case 'month':
                $start = $date->copy()->startOfMonth();
                $end = $date->copy()->endOfMonth();
                break;
            case 'week':
                $start = $date->copy()->startOfWeek();
                $end = $date->copy()->endOfWeek();
                break;
            case 'daily':
                $start = $date->copy()->startOfDay();
                $end = $date->copy()->endOfDay();
                break; 
            default:
                abort(400);          
        }

        return view('calendar.'.$type)
            ->with('type',$type)
            ->with('start',$start)
            ->with('end',$end);

    }
}
