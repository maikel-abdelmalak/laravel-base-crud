<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studenti = Student::all();

        return view('students', compact('studenti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'freshman' => 'required|unique:students|min:8',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mail' => 'email:rfc,dns|unique:students'
        ]);

        $dati= $request->all();
        $nuovo_studente = new Student;
        $nuovo_studente->fill($dati);
        $nuovo_studente->save();

        return redirect()->route('students.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studente = Student::find($id);
        if($studente){
            return view('show', compact('studente'));
        }else{
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studente = Student::find($id);
        if($studente){
            return view('edit', compact('studente'));
        }else{
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dati = $request->all();
        $studente = Student::find($id);
        $studente->update($dati);
        return redirect()->route('students.show', [$studente->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
