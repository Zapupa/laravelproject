<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports as Report; // f[f[f[]]]

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
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
}
