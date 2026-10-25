<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function students($courseId)
    {
        return 'Course ID: ' . $courseId;
    }
}