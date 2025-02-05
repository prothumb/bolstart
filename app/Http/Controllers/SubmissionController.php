<?php
namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;


class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        // Validate input fields
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);

        // Store in the database
        Submission::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()-> back()->with('success', 'Form submitted successfully!');
        
    }


    public function index()
    {
        $submissions = Submission::latest()->paginate(10);
        return view('backend.submission-manager', compact('submissions'));
    }
}



