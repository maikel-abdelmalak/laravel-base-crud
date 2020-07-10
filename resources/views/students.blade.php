@extends('layouts/layout')

@section('page-name')
    Studenti
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Lista Studenti</h1>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end">
                <a class="btn btn-primary" href="{{route('students.create')}}">Nuovo Contatto</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                         <th scope="col">Matricola</th>
                         <th scope="col">Nome</th>
                         <th scope="col">Cognome</th>
                         <th scope="col">Mail</th>
                         <th scope="col">Azioni</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($studenti as $studente)
                         <tr>
                           <th scope="row">{{$studente->freshman}}</th>
                           <td>{{$studente->firstname}}</td>
                           <td>{{$studente->lastname}}</td>
                           <td>{{$studente->mail}}</td>
                           <td class="text-right">
                              <a class="btn btn-sm btn-info" href="{{route('students.create')}}">Dettagli</a>
                              <a class="btn btn-sm btn-warning" href="{{route('students.create')}}">Modifica</a>
                              <a class="btn btn-sm btn-danger" href="{{route('students.create')}}">Elimina</a>
                           </td>
                         </tr>
                     @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection
