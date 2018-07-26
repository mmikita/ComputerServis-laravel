@extends('layouts.app')
@section('content')

<form method="post" action="{{ route('employee.add') }}">
                     {{csrf_field()}}

   <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Haslo:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
   <div class="form-group">
    <label for="pwd">imie:</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Dodaj pracownika</button>
</form>
@endsection