<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filters = request()->only(['search', 'min_salary', 'max_salary', 'experience', 'category']);

        $jobs = Job::query()->filter($filters);

        return view('job.index', ['jobs' => $jobs->simplePaginate(4)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', compact('job'));
    }
}
