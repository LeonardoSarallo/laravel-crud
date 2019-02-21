@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Anni</th>
              <th>Sesso</th>
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
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
