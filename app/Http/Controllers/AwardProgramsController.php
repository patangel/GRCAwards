<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\AwardProgram;


class AwardProgramsController extends Controller
{
    //Admin Actions
    public function getAllAwardPrograms()
    {
        $awps = AwardProgram::all();
        foreach ($awps as $awp) {
            $awp->hashid = Hashids::connection('awardProgram')->encode($awp->id);
            $awp->admin;
        }

        return view('contents.admin.index')->with(['awps' => $awps]);
    }

    public function  getAwardProgramDashboard($award_program)
    {
        $awp_id = Hashids::connection('awardProgram')->decode($award_program);
        if (AwardProgram::where('id', $awp_id)->exists()) {
            session('award_program_id', $award_program);
            return view('contents.admin.dashboard');
        }
    }

    public function addAwardProgram(Request $request)
    {
        $request->validate([
            'award_name' => ['required', 'string'],
            'award_year' => ['required', 'string'],
            'award_location' => ['required', 'string'],
        ]);

        $awp = new AwardProgram;
        $awp->name = $request->award_name;
        $awp->year = $request->award_year;
        $awp->location = $request->award_location;
        $awp->admin_id = Auth::guard('admin')->id();
        $awp->save();

        return redirect()->route('award.programs');
    }

    public function updateAwardProgram(Request $request, $award_program)
    {
        $awp_id = Hashids::connection('awardProgram')->decode($award_program);
        if ($awp = AwardProgram::where('id', $awp_id)->first()) 
        {
            $awp->name = $request->award_name;
            $awp->year = $request->award_year;
            $awp->location = $request->award_location;
            $awp->admin_id = Auth::guard('admin')->id();
            $awp->save();

            $request->session()->flash('success', 'Award Program Updated Successfully');
            return redirect()->route('award.programs');
        }
        $request->session()->flash('danger', 'Could not find award program on our Database');
        return redirect()->route('award.programs');
    }

    public function deleteAwardProgram(Request $request, $award_program)
    {
        $awp_id = Hashids::connection('awardProgram')->decode($award_program);

        if ($awp = AwardProgram::where('id', $awp_id)->first()) {
            $awp->delete();
            $request->session()->flash('success', 'Award Program Deleted Successfully');
            return redirect()->route('award.programs');
        }

        $request->session()->flash('danger', 'Could not find award program on our Database');
        return redirect()->route('award.programs');
    }

    public function activateAwardProgram(Request $request, $award_program)
    {
        $awp_id = Hashids::connection('awardProgram')->decode($award_program);

        if ($awp = AwardProgram::where('id', $awp_id)->first())
        {
            $awp->status = 1;
            $awp->save();
            $request->session()->flash('success', 'Award Program Activated Successfully');
            return redirect()->route('award.programs');
        }
        
        $request->session()->flash('danger', 'Could not find award program on our Database');
        return redirect()->route('award.programs');
    }

    public function deactivateAwardProgram(Request $request, $award_program)
    {
        $awp_id = Hashids::connection('awardProgram')->decode($award_program);

        if ($awp = AwardProgram::where('id', $awp_id)->first())
        {
            $awp->status = 0;
            $awp->save();
            $request->session()->flash('success', 'Award Program Deactivated Successfully');
            return redirect()->route('award.programs');
        }
        
        $request->session()->flash('danger', 'Could not find award program on our Database');
        return redirect()->route('award.programs');
    }
}
