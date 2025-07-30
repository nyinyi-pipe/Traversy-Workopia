<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;

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
    public function store(Request $request): string
    {
        $title = $request->title;
        $description = $request->description;
        return "Job : $title - Description: $description";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('jobs.show', compact('id'));
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
