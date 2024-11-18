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

    public function store(Request $request, Report $report)
    {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'required|string|max:255',
        ]);

        $report->create($data);
        return redirect()->back();
    }

    public function show(Report $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $data = $request->validate([
            'number' => 'string',
            'description' => 'required|string|max:255',
        ]);

        $report->update($data);
        return redirect()->back();
    }
}
