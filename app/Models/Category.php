<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['name', 'description','award_program_id'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function sectors(){
        return $this->hasMany(Sector::class, 'category_id');
    }

    // public function awards(){
    //     return $this->hasMany(Award::class, 'category_id');
    // }

}
