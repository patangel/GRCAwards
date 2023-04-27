<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Judge;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'admins';

    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname', 'lastname', 'role_id', 'is_super', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function awardPrograms()
    {
        return $this->hasOne(AwardProgram::class, 'admin_id');
    }

    public function judges()
    {
        return $this->hasOne(Judge::class, 'admin_id');
    }
}
