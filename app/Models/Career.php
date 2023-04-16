<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function application()
    {
        return $this->hasOne(Application::class, 'career', 'job_name');
    }

    public function getJobNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department', 'department')->withDefault();
    }
}
