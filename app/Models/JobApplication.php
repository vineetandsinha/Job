<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'phone', 'job_id', 'resume'
    ];

    public function job()
    {
        return $this->belongsTo('App\Models\JobList', 'job_id');
    }
}
