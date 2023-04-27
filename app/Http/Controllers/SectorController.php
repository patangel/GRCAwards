<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\AwardProgram;
use App\Models\Sector;
use App\Models\Category;

class SectorController extends Controller
{

    public function getSectors(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        // dd($award_program_id[0]);
        if (isset($award_program_id[0])) {
            $categories = Category::where('award_program_id', $award_program_id[0])->get();
            // $sectors = Sector::where('award_program_id', $award_program_id[0])->get();

            foreach ($categories as $category) {
                $category->hashid = Hashids::connection('category')->encode($category->id);
                $category->sectors;
                foreach ($category->sectors as $sector) {
                    $sector->hashid = Hashids::connection('sector')->encode($sector->id);
                }
            }
            
            return view('contents.admin.sectors')->with(['categories' => $categories, 'award_program' => $award_program]);
        }
        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->back();
    }

    


    public function addSector(Request $request, $award_program)
    {
        $request->validate([
            'category_name' => ['required','string'],
            'selected_sectors' => ['required', 'array', 'min:1'],
        ]);

        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);

        // $sector_id = Hashids::connection('sector')->decode($request->sector_name);

        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            foreach ($request->selected_sectors as $selected_sector) {
                $sector = new Sector;
                $sector->name = $selected_sector;
                $sector->award_program_id = $award_program_id[0];
                $sector->category_id = Hashids::connection('category')->decode($request->category_name)[0];
                $sector->save();
            }

            if ($request->ajax()) {
                return response()->json(['data' => [$sector, $award_program]]);
            } else {
                $request->session()->flash('success', 'Sector added successfully to sectors');
                return redirect()->route('admin.show_sectors', $award_program);
            }
        } else {
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

    public function deleteSector(Request $request, $award_program, $sector)
    {
        $sector_id = Hashids::connection('sector')->decode($sector)[0];

        if ($temp_sect = Sector::where('id', $sector_id)->first()) {
            $temp_sect->delete();
            $request->session()->flash('success', 'Sector deleted successfully');
            return redirect()->route('admin.show_sectors', $award_program);
        }

        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->route('admin.show_sectors', $award_program);
    }
}
