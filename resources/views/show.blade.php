@extends('layouts/layout')

@section('page-name')
    studente{{$studente->id}}
@endsection

@section('body')
    <div class="back">
        <a class="btn btn-default" href="{{route('students.index')}}"><i class="fas fa-arrow-left"></i></a>
    </div>
    <div class="container">
        <h1>Dettagli studente ID: {{$studente->id}}</h1>
        <ul>
            <li>Matricola: {{$studente->freshman}}</li>
            <li>Nome: {{$studente->firstname}}</li>
            <li>Cognome: {{$studente->lastname}}</li>
            <li>Mail: {{$studente->mail}}</li>
        </ul>
        <div class="">
            <a class="btn btn-sm btn-warning" href="{{route('students.edit',[$studente->id])}}">Modifica</a>
           <form class="d-inline" action="{{route('students.destroy', [$studente->id])}}" method="post">
               @method('DELETE')
               @csrf
                <input type="submit" value="Elimina"class="btn btn-sm btn-danger" href="">
           </form>
        </div>
    </div>
@endsection
