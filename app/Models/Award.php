<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $table = "awards";

    protected $fillable = ['name', 'sector_id','award_program_id', 'name', 'description', 'criteria'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'sector_id');
    }

}
