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
              <th>Aggiorna</th>
              <th>Elimina</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->gender }}</td>
                <td>
                  <a class="btn btn-secondary" href="{{ route('utenti.show', $user->id) }}">view</a>
                </td>
                <td>
                  <a class="btn btn-success" href="{{ route('utenti.edit', $user->id) }}">Edit</a>
                </td>
                <td>
                  <form class="" action="{{ route('utenti.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" name="" value="elimina">
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $users->links() }}
      </div>
    </div>
  </div>
@endsection
