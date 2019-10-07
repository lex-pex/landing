<?php
/**
 * Date: 12/19/18
 * Time: 2:40 PM
 */

namespace App\Assist;

use App\Assist\Contracts\Visitors;
use App\Models\DailyVisits;
use App\Models\Visit;

class VisitorsImpl implements Visitors
{

    public function todayVisits()
    {
        return DailyVisits::orderBy('date', 'desc')->first();
//        return DailyVisits::orderBy('id', 'desc')->value('id');
//        return DailyVisits::latest()->value('date'); // there is not 'created_at' column
    }

    public function pageVisits()
    {
        return Visit::all()->sortBy('created_at');
    }

    public function totalVisits()
    {
        return Visit::sum('amount');
    }

}