<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Award;

class AwardController extends Controller
{
    
    public function getAwards(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program)[0];
        if (isset($award_program_id)){
            $categories = Category::where('award_program_id', $award_program_id)->get();
       $sectors_array=[];
       $awards_array = [];
        foreach ($categories as $category){ 
                    $category->hashid = Hashids::connection('category')->encode($category->id);
            // $category->sectors;
            foreach($category->sectors as $sector){
                $sector->hashid = Hashids::connection('sector')->encode($sector->id);
                // $sector->awards;
                foreach($sector->awards as $award){
                $award->hashid = Hashids::connection('award')->encode($award->id);
                }
            }
            
            }
// dd($sectors);
        return view('contents.admin.awards')->with(['categories' => $categories,'award_program'=>$award_program]);
        }
            $request->session()->flash('danger', 'Could not find the data requested');
            return redirect()->back();
    }

    
    public function addAward(Request $request, $award_program)
    {
        $request->validate([
            'sector_name' => ['required', 'string'],
            'category_name' => ['required', 'string'],
            'award_description' => ['required', 'string'],
            'award_criteria' => ['required', 'string'],
            "award_name"    => ['required', 'string'],
            
        ]);

        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);

        // $sector_id = Hashids::connection('sector')->decode($request->sector_name);

        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()){
            
                $award = new Award;
                // $award->category_id = Hashids::connection('category')->decode($request->category_name)[0];
                $award->sector_id = Hashids::connection('sector')->decode($request->sector_name)[0];
                $award->name = $request->award_name;
                $award->description = $request->award_description;
                $award->criteria = $request->award_criteria;
                $award->award_program_id = $award_program_id[0];
                $award->save();
    
            if ($request->ajax()){
                return response()->json(['data'=>[$award, $award_program]]);
            }else{
                $request->session()->flash('success', 'Awards added successfully to categories');
                return redirect()->route('admin.show_awards', $award_program);
            }
        }else{
            $request->session()->flash('danger', 'Could not get the data requested');
            return redirect()->back();
        }
    }
     
    // public function getCategory(Request $request, $award_program, $category)
    // {
    //     $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
    //     $category_id = Hashids::connection('category')->decode($category);

    //     // dd($award_program_id[0]);
    //     if (isset($award_program_id[0])){
    //         $category_row = Category::where('id', $category_id[0])->get();
    //         $category_row->sector;
    //         $category_row->sector->hashid = Hashids::connection('sector')->encode($category_row->sector->id);
    //         $category_row->hashid = $category;
       
    //         return response()->json(['data'=>[$category_row, $award_program]]);
    //     }
    //         $request->session()->flash('danger', 'Could not find the data requested');
    //         return redirect()->back();
    // }

    
    // public function updateCategory(Request $request, $award_program,)
    // {
    //     $request->validate([
    //         'sector_name' => ['required', 'string'],
    //     ]);
    //     $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
    //     $sector_id = Hashids::connection('sector')->decode($sector);

    //     if ($new_sector= Sector::where('id', $sector_id[0])->first()){
    //         $new_sector->name = $request->sector_name;
    //         $new_sector->award_program_id = $award_program_id[0];
    //         $new_sector->save();
    
    //         if ($request->ajax()){
    //             return response()->json(['data'=>[$new_sector, $award_program]]);
    //         }else{
    //             $request->session()->flash('success', 'Sector Updated Successfully');
    //             return redirect()->route('award.program.sectors', $award_program);
    //         }
    //     }

    //     $request->session()->flash('danger', 'Could not find the data requested');
    //     return redirect()->route('admin.show_categories', $award_program);
    // }

    public function deleteAward(Request $request, $award_program, $award)
    {
        $award_id = Hashids::connection('award')->decode($award)[0];

        if ($temp_award = Award::where('id', $award_id)->first()) {
            $temp_award->delete();
            $request->session()->flash('success', 'Award deleted successfully');
            return redirect()->route('admin.show_awards',$award_program);
        }

        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->back();
    }
    
}
