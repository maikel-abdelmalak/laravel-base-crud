@extends('layouts/layout')

@section('page-name')
    Create-Student
@endsection

@section('body')
    <div class="container">
        <h1>Inserisci un nuovo studente</h1>
        <form action="{{route('students.store')}}" method="post">
            @csrf
             <div class="form-group">
                <label for="Matricola" >Inserisci Matricola</label>
                <input type="number" name="freshman" class="form-control" id="Matricola" placeholder="">
             </div>
             <div class="form-group">
                 <label for="nome" >Inserisci Nome</label>
                <input type="text" name="firstname" class="form-control" id="nome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="Cognome">Inserisci Cognome</label>
                <input type="text" name="lastname"class="form-control" id="cognome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="mail" >Inserisci Mail</label>
                <input type="mail" name="mail" class="form-control" id="mail" placeholder="">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
