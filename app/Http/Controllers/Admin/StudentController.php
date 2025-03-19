<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentlist()
    {

        $students = FormSubmission::with('user')->latest()->paginate(10);

        // return $students;
        return view('admin.student.index', compact('students'));

    }

    public function show($id)
    {
        $student = FormSubmission::findOrFail($id);
        return view('admin.student.show', compact('student'));
    }

    public function destroy($id)
    {
        $student = FormSubmission::findOrFail($id);
        $student->delete();

        return redirect()->route('student.list')->with('success', 'Student deleted successfully.');
    }

}
