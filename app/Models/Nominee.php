<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    use HasFactory;

    protected $table = "nominees";

    protected $fillable = ['name', 'sector_id','award_program_id', 'award_id'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'sector_id');
    }
}
