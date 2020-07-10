@extends('layouts/layout')

@section('page-name')
    Create-Student
@endsection

@section('body')
    <div class="container">
        <h1>Inserisci un nuovo studente</h1>
        <form>
             <div class="form-group">
                <label for="Matricola" name="freshman">Inserisci Matricola</label>
                <input type="number" class="form-control" id="Matricola" placeholder="">
             </div>
             <div class="form-group">
                 <label for="nome" name="firstname">Inserisci Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="Cognome" name="lastname">Inserisci Cognome</label>
                <input type="text" class="form-control" id="cognome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="mail" name="mail">Inserisci Mail</label>
                <input type="mail" class="form-control" id="mail" placeholder="">
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
