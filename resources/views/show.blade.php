@extends('layouts/layout')

@section('page-name')
    studente{{$studente->id}}
@endsection

@section('body')
    <div class="container">
        <h1>Dettagli studente ID: {{$studente->id}}</h1>
        <ul>
            <li>Matricola: {{$studente->freshman}}</li>
            <li>Nome: {{$studente->firstname}}</li>
            <li>Cognome: {{$studente->lastname}}</li>
            <li>Mail: {{$studente->mail}}</li>
        </ul>
    </div>
@endsection
