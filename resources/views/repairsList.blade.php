@extends('layouts.admin')
@section('content')
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">model komputera</th>
      <th scope="col">opis usterki</th>
      <th scope="col">status</th>
      <th scope="col">uwagi</th>
      <th scope="col">Data rozpoczęcia</th>
      <th scope="col">Pracownik</th>
    </tr>
</thead>
<tbody>
  	   @foreach($repairs as $repair)
    <tr>
      <td>{{$repair->id}}</td>
      <td>{{$repair->computerModel}}</td>
      <td>{{$repair->descriptionOfTheFault}}</td>
      <td>{{$repair->status}}</td>
      <td>{{$repair->comment}}</td>
      <td>{{$repair->created_at}}</td>
      <td>{{$repair->employee['lastName']}}</td>
    </tr>
@endforeach
  </tbody>

</table>
{{$repairs}}

@endsection