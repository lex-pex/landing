<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\DailyVisits;

class AdminController extends Controller
{
    public function panel(){
        return view('admin.admin');
    }

    public function feedback() {
        $items = Feedback::all()->sortByDesc('created_at');
        return view('admin.feedback', [
            'type' => 'feedback',
            'items' => $items
        ]);
    }

    public function calendar() {
        $weeksMap = $this->getWeeksMap();
        return view('admin.calendar', [
            'weeksMap' => $weeksMap
        ]);
    }

    private function getWeeksMap() {
        $cal = $this->getCalendar();
        $weeks = [];
        foreach ($cal as $monthName => $month) {
            $w = 0;
            $prevSunday = '';
            foreach($month as $num => $visits) {
                $str = $visits->date;
                $time = strtotime($str);
                $wd = date('w', $time);
                $d = date('j', $time);
                $thisSunday = $d - $wd;
                if(is_numeric($prevSunday)) {
                    if($thisSunday > $prevSunday) $w ++;
                }
                $weeks[$monthName][$w][$wd] = $visits;
                $prevSunday = $thisSunday;
            }
        }
        return $weeks;
    }

    public function getCalendar() {
        $calendar = array();
        $dailyVisits = DailyVisits::all()->sortBy('date');
        foreach($dailyVisits as $visits) {
            $str = $visits->date;
            $time = strtotime($str);
            $month = date('M', $time);
            $day = date('j', $time);
            $calendar[$month][$day] = $visits;
        }
        return $calendar;
    }

}