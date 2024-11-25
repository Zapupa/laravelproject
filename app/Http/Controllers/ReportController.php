<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        // $reports = Report::all();
        return view("report.index", compact("reports"));
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }

    public function create(){
        return view("report.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'required|string|max:255',
        ]);
        Report::create([
            'number'=> $data['number'],
            'description'=> $data['description'],
            'status_id' => 1,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('dashboard');
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'status_id' => ['required'],
            'id' => ['required'],
        ]);
        Report::where('id', $request->id)->update([
            'status_id'=> $request->status_id,
        ]);
        return redirect()->back();
    }
}
