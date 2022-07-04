@extends('vols.layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier la voiture
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('vols.update', $vol->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')

              <div class="form-group">
              <label for="code">Code</label>
              <input type="number" class="form-control" name="code"/>
          </div>

          <div class="form-group">
              <label for="date_depart">Date_depart</label>
              <input type="date" class="form-control" name="date_depart"/>
          </div>

          <div class="form-group">
              <label for="heure_depart">Heure_depart</label>
              <input type="time" class="form-control" name="heure_depart"/>
          </div>

          <div class="form-group">
              <label for="place_affaire">Place_affaire</label>
              <input type="text" class="form-control" name="place_affaire"/>
          </div>

          <div class="form-group">
              <label for="place_business">Place_business</label>
              <input type="text" class="form-control" name="place_business"/>
          </div>

          <div class="form-group">
              <label for="prix_affaire">Prix_affaire</label>
              <input type="number" class="form-control" name="prix_affaire"/>
          </div>

          <div class="form-group">
              <label for="prix_business">Prix_business</label>
              <input type="number" class="form-control" name="prix_business"/>
          </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection