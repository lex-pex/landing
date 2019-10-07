<?php
/**
 * Created by PhpStorm.
 * User: lex
 * Date: 12/18/18
 * Time: 11:06 PM
 */

namespace App\Assist\Contracts;


interface Visitors
{
    public function totalVisits();
    public function todayVisits();
    public function pageVisits();
}