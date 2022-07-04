

@extends('vols.layout')

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
          <td>code</td>
          <td>date_depart</td>
          <td>heure_depart</td>
          <td>place_affaire</td>
          <td>place_business</td>
          <td>prix_affaire</td>
          <td>prix_business</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
      
        <tr>
            <td>{{$vol->id}}</td>
            <td>{{$vol->code}}</td>
            <td>{{$vol->date_depart}}</td>
            <td>{{$vol->heure_depart}}</td>
            <td>{{$vol->place_affaire}}</td>
            <td>{{$vol->place_business}}</td>
            <td>{{$vol->prix_affaire}}</td>
            <td>{{$vol->prix_business}}</td>
            <td><a href="{{ route('vols.edit', $vol->id)}}" class="btn btn-primary">Modifier</a></td>
            <td><a href="{{ route('vols.create', $vol->id)}}" class="btn btn-primary">Creer</a></td>

            <td>
                <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        
    </tbody>
  </table>
<div>
@endsection

