<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Student, Formation, Professional,LanguageStudent, KnowledgeStudent, City, Language, Knowledge, Subknowledge, Hierarchy, Country, State, Level, Course};

class StudentController extends Controller
{
    public function show()
    {
        $student = auth()->guard('student')->user();
        return view('student.pages.student.show')->with('student', $student);
    }

    public function edit()
    {
        $student = auth()->guard('student')->user();
        return view('student.pages.student.edit')
        ->with('student', $student)
        ->with('cities', City::all())
        ->with('languages', Language::all())
        ->with('knowledges', Knowledge::all())
        ->with('subknowledges', Subknowledge::all())
        ->with('hierarchies', Hierarchy::all())
        ->with('countries', Country::all())
        ->with('states', State::all())
        ->with('levels', Level::all())
        ->with('courses', Course::all());
    }
}
