<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    use HasFactory;


    protected $table = "judges";

    protected $fillable = ['name', 'profile','award_program_id', 'path_to_image', 'position', 'fb_link', 'ig_link', 'ln_link'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }


}
