<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function recruitment()
    {
        return view('content.recruiter.recruiter');
    }

    public function notes()
    {
        return 'Hello Notes';
    }

    public function posting()
    {
        return 'Hello Job Posting';
    }

    public function schedule()
    {
        return 'Hello Schedule Interview';
    }

    public function register()
    {
        return 'Hello Register';
    }

    public function recognitions()
    {
        return 'Recognitions';
    }
}
