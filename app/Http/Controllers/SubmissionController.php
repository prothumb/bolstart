<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        // Validate input fields
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:submissions,email',
            'date'  => 'required|date_format:d-m-Y',
        ]);

        // Store data in the database
        Submission::create([
            'name'  => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'date'  => Carbon::createFromFormat('d-m-Y', $request->date)->format('Y-m-d'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return response()->json([
            'message' => 'Form submitted successfully!',
        ]);
    }

    public function index()
    {
        $submissions = Submission::latest()->paginate(10);
        return view('backend.submission-manager', compact('submissions'));
    }

    public function exportCsv()
{
    $fileName = 'exported_data.csv';
    $users = Submission::all(); // Fetch all data

    $headers = [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    ];

    $callback = function () use ($users) {
        $file = fopen('php://output', 'w');

        // Add CSV header
        fputcsv($file, ['Name', 'Phone', 'Email', 'Date']);

        // Add data
        foreach ($users as $user) {
            fputcsv($file, [$user->name, $user->phone, $user->email, $user->date]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}
}
