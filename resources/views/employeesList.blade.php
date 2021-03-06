@extends('layouts.admin')
@section('content')





<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">imie</th>
      <th scope="col">nazwisko</th>
      <th scope="col">email</th>
      <th scope="col">numer telefonu</th>
      <th scope="col">rola</th>
      <th scope="col">Edytuj dane</th>
      <th scope="col">Usuń</th>
      <th scope="col">Zmień hasło</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach($employees  as $employee)
    <tr>
    <th scope="row">{{$employee->id}}</th>
    <td>{{$employee->firstName}}</td>
    <td>{{$employee->lastName}}</td>
    <td>{{$employee->email}}</td>
    <td>{{$employee->phoneNumber}}</td>
    <td>{{$employee->role=== 'employee' ? 'pracownik' : 'administrator' }}</td>
    <td><a href="/admin/editEmployee?id={{$employee->id}}">Edytuj</a></td>
    <td><a href="/admin/deleteEmployee?id={{$employee->id}}" onclick="return confirm('Jesteś pewny?')">Usuń</a></td>
    <td><a href="/admin/editPassword?id={{$employee->id}}">Zmień</a></td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection