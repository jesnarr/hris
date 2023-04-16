<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    public const PENDING      = 0;
    public const PHONE_SCREEN = 1;
    public const REJECT       = 2;
    public const INTERVIEW    = 3;
    public const OFFER        = 4;

    public $application = [
        0 => 'Pending',
        1 => 'Phone Screen',
        2 => 'Reject',
        3 => 'Interview',
        4 => 'Offer'
    ];

    public function  setAvailableStartDate($value)
    {
        $this->attributes['available_start_date'] = date('Y-m-d', strtotime($value));
    }
}
