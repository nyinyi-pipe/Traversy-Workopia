<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // return view('jobs')->with('jobs', $jobs);

        $jobs = Job::all();// all() is default Eloquent ()

        return view('jobs.index')->with('jobs', $jobs);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $title = "Create New Job";
        return view('jobs.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $title = $request->input('title');
        // $description = $request->input('description');
        // **** Validate **** //
        $validatedData = $request->validate([
            'title' => 'required|string|max:20', // type must be string and don't be more than 20 words
            'description' => 'required|string',
        ]);

        // Save with Validated Data
        Job::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View // Job $job is Route-Model Binding, it will show SINGLE Job
    {
        // dd($job);
        return view('jobs.show')->with('job', $job);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        return "EDIT";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return "UPDATE";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return "DELETE";
    }
}
