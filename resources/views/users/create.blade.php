@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Aggiungi nuovo utente</h1>
        <form class="form-group" action="{{ route('utenti.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Inserisci nome">
          </div>
          <div class="form-group">
            <label for="lastname">Cognome</label>
            <input type="text" name="lastname" class="form-control" placeholder="Inserisci cognome">
          </div>
          <div class="form-group">
            <label for="age">anni</label>
            <input type="number" name="age" class="form-control" placeholder="Inserisci i tuoi anni">
          </div>
          <div class="form-group">
            <label for="gender">Sesso</label>
            <select name="gender" class="form-control">
              <option value="">----</option>
              <option value="m">M</option>
              <option value="f">F</option>

            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="" value="Salva nuovo utente">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
