<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;


    protected $table = "votes";

    protected $fillable = ['ip_address','mac_address','voter_id','award_id','nominee_id', 'award_program_id'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function award(){
        return $this->belongsTo(Award::class, 'award_id');
    }

    public function voter(){
        return $this->belongsTo(Voter::class, 'voter_id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id');
    }
   

}
