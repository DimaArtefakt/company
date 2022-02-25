<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StaffRequest;

class MainController extends Controller
{
    public function index()
    {
        $personal = Staff::all();

    if($personal->isEmpty()) {
    return view('start', compact('personal'));
    }
    else {
    return view('start', compact('personal'));
    }
    }

    public function submit()
    {
        return view('add');
    }

    public function add(StaffRequest $req)
    {
        $staff = new Staff();
        $staff->name = $req->input('name');
        $staff->surename = $req->input('Surname');
        $staff->date_of_birth = $req->input('dateBirth');
        $staff->education = $req->input('Education');
        $staff->post = $req->input('Post');
        $staff->salary = $req->input('Salary');

        $staff->save();


        return redirect()->route('start')->with('success', 'Add OK');
    }

    public function staffUpdate($id)
    {
        $staff = new Staff;
        if ($staff->IsDirty()) {
           return view('update', ['staff' => $staff->find($id) ]);
        }
        return redirect()->route('start')->with('norecord', 'No record');
    }

    public function staffUpdateMesseges($id, StaffRequest $req)
    {

        $staff = Staff::find($id);
        $staff->name = $req->input('name');
        $staff->surename = $req->input('Surname');
        $staff->date_of_birth = $req->input('dateBirth');
        $staff->education = $req->input('Education');
        $staff->post = $req->input('Post');
        $staff->salary = $req->input('Salary');

        $staff->save();

        return redirect()->route('start')->with('success', 'Update OK');
    }

    public function staffDel($id)
    {
        Staff::find($id)->delete();
        return redirect()->route('start')->with('success', 'Del OK');
    }
}
