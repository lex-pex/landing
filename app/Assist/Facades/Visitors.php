<?php
/**
 * Date: 12/19/18
 * Time: 2:48 PM
 */

namespace App\Assist\Facades;

use Illuminate\Support\Facades\Facade;

class Visitors extends Facade
{
    public static function getFacadeAccessor(){
        return 'visitors';
    }
}
