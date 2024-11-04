<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //menampilkan daftar siswa
    public function index(){
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required|string',
            'NIS' => 'required|string',
        ]);

        Student::create($data);

        return redirect()->route('student.index')->with('success', 'Data berhasil disimpan');
    }
    //menambahkan public edit
    public function edit(Student $student){
        return view('students.edit', ['student' => $student]);
    }
    //membuat function update
    public function update(Student $student, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required|string',
            'NIS' => 'required|string',
        ]);

        $student->update($data);

        return redirect()->route('student.index')->with('success', 'Data Berhasil di Update');
    }
    //menambahkan function destroy
    public function destroy(Student $student){
        $student->delete();
        return redirect(route('student.index'))->with('success', 'Data Berhasil di Hapus');
    }
}
