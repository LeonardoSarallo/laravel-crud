@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <a href="{{ route('utenti.create')}}" class="btn btn-primary">Aggiungi nuovo utente</a>
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Anni</th>
              <th>Sesso</th>
              <th>Visualizza</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->lastname}}</td>
                <td>{{ $user->age}}</td>
                <td>{{ $user->gender}}</td>
                <td>
                  <a class="btn btn-secondary" href="{{ route('utenti.show', $user->id) }}">view</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
