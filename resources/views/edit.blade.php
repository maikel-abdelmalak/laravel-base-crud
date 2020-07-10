@extends('layouts/layout')

@section('page-name')
    edit-Student{{$studente->id}}
@endsection

@section('body')
    <div class="container">
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $errore)
                        <li>{{$errore}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Inserisci un nuovo studente</h1>
        <form action="{{route('students.update', [$studente->id])}}" method="post">
            @method('put')
            @csrf
             <div class="form-group">
                <label for="Matricola" >Inserisci Matricola</label>
                <input type="number" value="{{$studente->freshman}}" name="freshman" class="form-control" id="Matricola" placeholder="inserisci minimo 8 cifre">
             </div>
             <div class="form-group">
                 <label for="nome" >Inserisci Nome</label>
                <input type="text" value="{{$studente->firstname}}" name="firstname" class="form-control" id="nome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="Cognome">Inserisci Cognome</label>
                <input type="text" value="{{$studente->lastname}}" name="lastname"class="form-control" id="cognome" placeholder="">
             </div>
             <div class="form-group">
                 <label for="mail" >Inserisci Mail</label>
                <input type="mail" value="{{$studente->mail}}" name="mail" class="form-control" id="mail" placeholder="inserisci un indirizzo mail valido">
             </div>
             <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
