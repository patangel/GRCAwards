<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Voter extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'voters';

    protected $guard = 'voter';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email', 'agreement', 'award_program_id', 'token', 'active', 'ip_address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'agreement',
    ];

//Accessors
    public function getInitialsAttribute()
    {
        $fname = $this->firstname;
        $lname = $this->lastname;

        $initials = $fname[0];
        $initials .= $lname[0];
        return strtoupper($initials);
    }

    public function getFullnameAttribute()
    {
        $fullname = $this->firstname.' '.$this->lastname ;
    
        return ucwords($fullname);
    }

//Relationships

    public function awardPrograms()
    {
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }
}
