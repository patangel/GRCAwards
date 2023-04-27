<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Judge;
use Vinkla\Hashids\Facades\Hashids;


class LandingPageController extends Controller
{

    public function showLandingIndex()
    {

        $judges = Judge::where('award_program_id', 1)->get();
        return view('contents.voter.index')->with(['judges'=>$judges]);
    }

    public function showAboutTheAward()
    {
        return view('contents.voter.about_the_award');
    }

    public function showSectorsAndCategories()
    {
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->awards;
            }
        }
        return view('contents.voter.sectors_categories')->with(['categories'=>$categories]);
    }

    public function showTheOrganizers()
    {
        return view('contents.voter.organizers');
    }

    public function showContactUs()
    {
        return view('contents.voter.contact');
    }

    public function showVote()
    {
        $current_award_program = AwardProgram::where('status', 1)->latest()->first();
        $categories = Category::where('award_program_id', $current_award_program->id)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;
            foreach($category->sectors as $sector){
                $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            }
        }
        return view('contents.voter.vote')->with(['categories'=>$categories]);
    }

    public function showJudges(){
        $judges = Judge::where('award_program_id', 1)->get();
        foreach($judges as $judge){
            $judge->hashid = Hashids::connection('email')->encode($judge->id);
        }
        return view('contents.voter.meet_judges')->with(['judges'=>$judges]);
    }

    public function showJudgingProcess()
    {
        return view('contents.voter.judging_process');
    }

    public function showSponsors()
    {
        return view('contents.voter.sponsors');
    }

    public function showFaqs()
    {
        return view('contents.voter.faqs');
    }

    public function showPolicy()
    {
        return view('contents.voter.privacy_policy');
    }
    public function showTc()
    {
        return view('contents.voter.t_c');
    }

    public function showPress()
    {
        return view('contents.voter.press_announcements');
    }

    public function showShortlistedNominees(){
        return view('contents.voter.shortlisted_nominees');
    }

    public function showWinners(){
        return view('contents.voter.winners');
    }

    public function showPicturesCategories(){
        return view('contents.voter.pictures_categories');
    }

    public function showPictures($award_program){
        return view('contents.voter.pictures');
    }
}
