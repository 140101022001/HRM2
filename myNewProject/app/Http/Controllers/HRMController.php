<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HRM;
use App\Models\Skill;

class HRMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {
        //
        // $hrm = HRM::select('*')
        //         ->where('delete_status', '=', 1)
        //         ->paginate(5);
        $hrm = HRM::paginate(5);
        // $hrm::paginate(5);
        // $hrm = HRM::withTrashed();
        // $hrm->restore();
        return view('HRM/HRM-index', compact('hrm'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $skills = Skill::all();
        return view('HRM/HRM-create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $skill_se = $request->input('skill_se');
        $skill_seStr = implode(', ', $skill_se);
        $graduate_4 = $request->has('graduate_4') ? 1 : 0;
        $graduate_2 = $request->has('graduate_2') ? 1 : 0;
        $data = $request->all();
        $data['skill_se'] = $skill_seStr;
        $data['graduate_4'] = $graduate_4;
        $data['graduate_2'] = $graduate_2;
        $request->merge($data);
        HRM::create($data);
        return redirect()->route('HRM.index')->with('information', 'Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $hrm = HRM::find($id);
        return view('HRM/HRM-show', compact('hrm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $hrm = HRM::find($id);
        $skills = Skill::all();
        $string = $hrm->skill_se;
        $arraySkill = explode(", ", $string);
        $hrm['skill_se'] = $arraySkill;
        // // $hrm->merge($hrm);
        return view('HRM/HRM-edit', compact('hrm', 'skills'));
        // echo dd($hrm->skill_se);
        // dd($skills);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $hrm = HRM::find($id);
        $data = $request->all();
        $skill_se = $request->input('skill_se');
        $skill_seStr = implode(', ', $skill_se);
        $graduate_4 = $request->has('graduate_4') ? 1 : 0;
        $graduate_2 = $request->has('graduate_2') ? 1 : 0;
        $data['skill_se'] = $skill_seStr;
        $data['graduate_4'] = $graduate_4;
        $data['graduate_2'] = $graduate_2;
        $hrm->update($data);
        return redirect()->route('HRM.index')->with('information', 'Update Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hrm = HRM::find($id);
        // $hrm->delete_status = 0;
        // $hrm->update();
        $hrm->delete();
        return redirect(route('HRM.index'))->with('information', 'Delete Successful!');
    }
    public function restore() {
        $hrm = HRM::withTrashed();
        $hrm->restore();
        return redirect(route('HRM.index'));
    }
}
