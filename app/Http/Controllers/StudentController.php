<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function studenti() {
        $data = Student::all();
        return view('studenti', compact('data'));
    }

    public function show($id) {
        $student = Student::find($id);
        return view('show', compact('student'));
    }

    // protected $students;
    //
    // public function __construct() {
    //     $this->students = config('students');
    // }
    //
    // public function studenti() {
    //     $data = config('students');
    //     return view('studenti', compact('data'));
    // }
    //
    // public function show($id) {
    //     if(!array_key_exists($id, $this->students)) {
    //         abort(404);
    //     }
    //     $student = $this->students[$id];
    //     return view('show', compact('student'));
    // }
    //
    // // oppure utilizzo lo slug
    //
    // public function slug($nome) {
    //     foreach ($this->students as $student) {
    //         if ($student['slug'] == $nome) {
    //             // se trova il valore lo memorizza in una variabile
    //             $student = $studente;
    //             // imposta trovato a true
    //             $trovato = true;
    //         }
    //     }
    //     if($trovato) {
    //         // se ha trovato il valore
    //         return view('slug', compact('student'));
    //     } else {
    //         // se non ha trovato il valore
    //         abort(404);
    //     }
    // }

}
