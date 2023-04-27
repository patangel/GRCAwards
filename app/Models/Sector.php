<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = "sectors";

    protected $fillable = ['name', 'category_id', 'award_program_id'];

    public function awardProgram()
    {
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function awards()
    {
        return $this->hasMany(Award::class, 'sector_id');
    }
}
