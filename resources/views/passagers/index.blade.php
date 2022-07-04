@extends('passagers.layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>nom</td>
          <td>prenom</td>
          <td>sexe</td>
          <td>type</td>
          <td>Prix</td>
          <td>vol_id</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
      
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->nom}}</td>
            <td>{{$reservation->prenom}}</td>
            <td>{{$reservation->sexe}}</td>
            <td>{{$reservation->type}}</td>
            <td>{{$reservation->prix}}</td>
            <td>{{$reservation->vol_id}}</td>
            <td><a href="{{ route('passagers.edit', $reservation->id)}}" class="btn btn-primary">Modifier</a></td>
            <td><a href="{{ route('passagers.create', $reservation->id)}}" class="btn btn-primary">Creer</a></td>
            <td>
                <form action="{{ route('passagers.destroy', $reservation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
      
    </tbody>
  </table>
<div>
