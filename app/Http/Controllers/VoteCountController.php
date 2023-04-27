<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Vote;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Sector;
use App\Models\Award;
use App\Models\Nominee;

class VoteCountController extends Controller
{
    

    public function getCatSec($award_program_id )
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];

        $categories = Category::where('award_program_id', $award_program)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            }
        }
        // return view('contents.voter.vote')->with(['categories'=>$categories]);
        return view('contents.admin.cat_sec')->with(['categories'=>$categories, 'award_program'=>$award_program_id]);
    }

    public function getSectorsAwards($award_program_id, $category_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];
        $category= Hashids::connection('category')->decode($category_id)[0];

        $sectors = Sector::where([['award_program_id','=', $award_program],['category_id','=',$category]])->get();
        $category_dets = Category::find($category);
        $nominees = Nominee::where('award_program_id', $award_program)->get();
        $votes = Vote::where('award_program_id', $award_program)->get();
        foreach($sectors as $sector){
            $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            $sector->awards;
            foreach($sector->awards as $award){
                $award->hashid = Hashids::connection('award')->encode($award->id) ;

            }
        }
$big_votes=[];
        foreach($nominees as $nominee){
            $nominee->hashid = Hashids::connection('nominee')->encode($nominee->id);
            $award_array = json_decode($nominee->award_ids);
            
            $array_length = count($award_array);
            foreach($award_array as $aw){
                $vote_counts[$aw] = 0;
            }
            
            foreach($votes as $vote){
                if ($vote->nominee_id == $nominee->id && in_array($vote->award_id, $award_array)){
                    for($i=0;$i< $array_length; $i++){
                        if($vote->award_id == $award_array[$i]){
                            $vote_counts[$vote->award_id]+=1;
                            // $nominee->vote_counts=$vote_counts;
                            // echo $nominee->vote_counts[0];
                            $big_votes[$nominee->id] = $vote_counts;
                        }
                    }
                }
            }
        }

        // var_dump($nominees);
        return view('contents.admin.sectors_awards')->with(['big_votes'=>$big_votes,'sectors'=>$sectors,'nominees'=>$nominees,'category'=>$category_dets, 'award_program'=>$award_program_id]);
    }
}
