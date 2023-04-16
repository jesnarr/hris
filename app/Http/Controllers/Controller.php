<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $days = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday'
    ];

    public $time =
    [
        '08:00 AM' => '08:00 AM',
        '09:00 AM' => '09:00 AM',
        '10:00 AM' => '10:00 AM',
        '11:00 AM' => '11:00 AM',
        '12:00 PM' => '12:00 PM',
        '13:00 PM' => '13:00 PM',
        '14:00 PM' => '14:00 PM',
        '15:00 PM' => '15:00 PM',
        '16:00 PM' => '16:00 PM',
        '17:00 PM' => '17:00 PM',
        '18:00 PM' => '18:00 PM',
    ];



}
