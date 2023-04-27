<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardProgram extends Model
{
    use HasFactory;

    protected $table = "award_programs";

    protected $fillable = ['name', 'year', 'location'];

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function sectors(){
        return $this->hasMany(Sector::class, 'award_program_id');
    }

    public function categories(){
        return $this->hasMany(Category::class, 'award_program_id');
    }

    public function voters(){
        return $this->hasMany(Voter::class, 'award_program_id');
    }
}
