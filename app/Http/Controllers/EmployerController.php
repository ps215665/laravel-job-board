<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmployerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Employer $employer)
    {
        if(!Gate::allows('create', $employer)){
            abort(403);
        }

        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
