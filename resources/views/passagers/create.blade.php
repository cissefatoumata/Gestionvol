@extends('passagers.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
 Ajouter une reservation
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

      <form method="post" action="{{ route('passagers.store') }}">
.         @csrf
           <div class="form-group">
              <label for="type">Nom:</label>
              <input type="text" class="form-control" name="nom"/></br></br>
          </div>
          <div class="form-group">
              <label for="type">Prenom:</label>
              <input type="text" class="form-control" name="prenom"/></br></br>
          </div>
          <div class="form-group">
              <label for="type">Sexe:</label>
              <input type="text" class="form-control" name="sexe"/></br></br>
          </div>
                <div class="form-group">
              <label for="type">Type S:</label>
              <input type="text" class="form-control" name="type"/></br></br>
          </div>

          <div class="form-group">
              <label for="prix">Prix :</label>
              <input type="text" class="form-control" name="prix"/></br></br>
          </div>
         <div class="container"> 
         <label for="vol_id">vol_id:</label>
                <select class="form-control" name="vol_id">
                    @foreach ($vol as $vole)
                    <option value= "{{$vole->id}}"
                    >{{$vole->code}} </option>
                    @endforeach
                </select>
            
        </div> 
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>