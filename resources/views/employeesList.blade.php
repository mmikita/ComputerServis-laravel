@extends('layouts.app')
@section('content')



<!--
{{ $employees }}
-->

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach($employees  as $employee)
    <tr>
    <th scope="row">1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>nico</td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection