<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judgevote extends Model
{
    use HasFactory;

    protected $table = "judgevotes";

    protected $fillable = ['award_program_id', 'award_id', 'judges_id', 'nominee_id', 'created_at', 'updated_at'];

}
