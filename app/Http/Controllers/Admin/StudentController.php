<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{City, Country, Course, Formation, Level, State, Language, KnowledgeStudent,
    Hierarchy, Professional, Student, LanguageStudent, Subknowledge, Knowledge, OccupationArea};

class StudentController extends Controller
{
    public function show(Request $request)
    {
        $students = new Student;

        if ($request->has('name')) {
            if (request('name') != '') {
                $students = $students->where('name', 'like', '%' . request('name') . '%');
            }
        }
        if ($request->has('email')) {
            if (request('email') != '') {
                $students = $students->where('email', 'like', '%' . request('email') . '%');
            }
        }

        $students = $students->orderBy('name', 'asc')->paginate(10);
        return view('admin.pages.student.index')->with('students', $students);
    }

    public function create()
    {
        return view('admin.pages.student.create')
        ->with('occupations', OccupationArea::all());
    }

    public function store(Request $request)
    {
        $data = validateStudent($request);

        $data['thumbnail'] = $this->validateThumbnail($request);
        $student = Student::create($data);
        return redirect()->route('admin.student.edit', ['student' => $student])->with('success', "Ex-Aluno Incluído");
    }

    public function edit(Student $student)
    {
        $formations = Formation::where('student_id', $student->id)->get();
        $professionals = Professional::where('student_id', $student->id)->get();
        $languages_student = LanguageStudent::where('student_id', $student->id)->get();
        $knowledges_student = KnowledgeStudent::where('student_id', $student->id)->get();

        return view('admin.pages.student.edit')
        ->with('student', $student)
        ->with('formations', $formations)
        ->with('professionals', $professionals)
        ->with('languages_student', $languages_student)
        ->with('knowledges_student', $knowledges_student)
        ->with('cities', City::all())
        ->with('occupations', OccupationArea::all())
        ->with('languages', Language::all())
        ->with('knowledges', Knowledge::all())
        ->with('subknowledges', Subknowledge::all())
        ->with('hierarchies', Hierarchy::all())
        ->with('countries', Country::all())
        ->with('states', State::all())
        ->with('levels', Level::all())
        ->with('courses', Course::all());
    }

    public function statusValidate(Student $student)
    {
        $student->status == 0 ? $student->status = 1 : $student->status = 0;
        $student->save();
        return redirect()->back()->with('info','Status Alterado');
    }

    public function update(Request $request)
    {
        $data = validateStudent($request);

        if($request->file()){
            $data['thumbnail'] = $this->validateThumbnail($request);
        }
        $student = Student::find($request->student_id)->update($data);

        return redirect()->back()->with('success', "Ex-Aluno Editado");
    }

    public function delete(Student $student)
    {
        foreach($student->formations as $data){
            $data->delete();
        }

        foreach($student->professionals as $data){
            $data->delete();
        }

        foreach($student->language_students as $data){
            $data->delete();
        }

        foreach($student->knowledge_students as $data){
            $data->delete();
        }

        $student->delete();
        return redirect()->back()->with('info', "Ex-Aluno Removido");

    }

    public function password(Request $request)
    {
        $request->validate([
            'password'  => "required|confirmed|min:6",
        ]);
        $student = auth()->guard('admin')->user();
        
        $student = Student::find($request->id);
        $student->save();
        return redirect()->back()->with('success', 'Senha Atualizada');
    }

    public function getCourses(Request $request)
    {
        $courses = Course::where('level_id', $request->level_id)->get();

        return json_encode($courses);
    }

    public function getCities(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get();

        return json_encode($cities);
    }

    public function getSubknowledges(Request $request)
    {
        $subknowledges = Subknowledge::where('knowledge_id', $request->knowledge_id)->get();

        return json_encode($subknowledges);
    }

    private function validateThumbnail(Request $request)
    {
        if (isset($request->thumbnail)) {
            $request->validate([
                'thumbnail' => 'mimes:jpg,jpeg,png'
            ]);
            $arq_img_name = imgValidate(
                                '/images/thumbnail/',
                                $request->file('thumbnail'),
                                'students',
                                'thumbnail',
                            );
        } else {
            $arq_img_name = 'thumbnail.jpg';
        }
        return $arq_img_name;
    }

}