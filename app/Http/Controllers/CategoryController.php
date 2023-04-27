<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Sector;


class CategoryController extends Controller
{
    
    public function getCategories(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0])){
        $categories = Category::where('award_program_id', $award_program_id[0])->get();
        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
        }
            return view('contents.admin.categories')->with(['categories' => $categories, 'award_program'=>$award_program]);
        }
            $request->session()->flash('danger', 'Could not the data you requested!');
            return redirect()->back();
    }
    
    public function getSpecificSectors($award_program, $category)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program)[0];
        $category_id = Hashids::connection('category')->decode($category)[0];
        if (isset($award_program_id)) {
            $specific_sectors = Sector::where([['award_program_id', '=', $award_program_id], ['category_id', '=', $category_id]])->get();
            echo '<option value="">Please Select...</option>';
            foreach ($specific_sectors as $specific_sector) {
                $specific_sector->hashid = Hashids::connection('sector')->encode($specific_sector->id);
                echo '<option value="'.$specific_sector->hashid.'">'.$specific_sector->name.'</option>';
            }
        }
    }

    public function addCategory(Request $request, $award_program)
    {
        $request->validate([
            'category_name' => ['required', 'string'],
            'category_description' => ['required', 'string'],

        ]);
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()){
            $category = new Category;
            $category->name = $request->category_name;
            $category->description = $request->category_description;
            $category->award_program_id = $award_program_id[0];
            $category->save();
    
            if ($request->ajax()){
                return response()->json(['data'=>[$category, $award_program]]);
            }else{
                $request->session()->flash('success', 'Category Added Successfully');
                return redirect()->route('admin.show_categories', $award_program);
            }
        }else{
            $request->session()->flash('danger', 'Invalid Award Program');
            return redirect()->route('admin.show_categories', $award_program);
        }
    }


    
    public function updateCategory(Request $request, $award_program, $category)
    {
        $request->validate([
            'category_name' => ['required', 'string'],
            'category_description' => ['required', 'string'],
        ]);
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $category_id = Hashids::connection('category')->decode($category);

        if ($new_category = Category::where('id', $category_id[0])->first()){
            $new_category->name = $request->category_name;
            $new_category->description = $request->category_description;
            $new_category->award_program_id = $award_program_id[0];
            $new_category->save();
    
            if ($request->ajax()){
                return response()->json(['data'=>[$new_category, $award_program]]);
            }else{
                $request->session()->flash('success', 'Category Updated Successfully');
                return redirect()->route('admin.show_categories', $award_program);
            }
        }

        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->route('admin.show_categories');
    }

    public function deleteCategory(Request $request, $award_program, $category)
    {
      
        $category_id = Hashids::connection('category')->decode($category)[0];

        if ($temp_category = Category::where('id', $category_id)->first()) {
            $temp_category->delete();
            $request->session()->flash('success', 'Category Deleted Successfully');
            return redirect()->route('admin.show_categories',$award_program);
        }

        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->route('admin.show_categories', $award_program);
    }
    
}
