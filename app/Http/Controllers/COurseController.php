<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class COurseController extends Controller
{
    public function index()
    {
        $courses = Course::all();


        return response()->json($courses, 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "banner_url" => "required",
            "capacity" => "required|min:1",
        ]);

        $course = new Course($validated);
        $course->save();
        return response()->json(["message" => "Course created successfully"], 201);

    }

}
