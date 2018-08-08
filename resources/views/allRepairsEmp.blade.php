@extends('layouts.employee')

@section('content')

<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">model komputera</th>
      <th scope="col"  width="25%">opis usterki</th>
      <th scope="col" width="75%">uwagi</th>
      <th scope="col">klient-kontakt</th>
      <th scope="col">imie naziwsko klienta</th>
      <th scope="col">status</th>
      <th scope="col">przydział</th>
    </tr>
</thead>
<tbody>
  	   @foreach($repairs as $repair)
    <tr>
      <td>{{$repair->id}}</td>
      <td>{{$repair->computerModel}}</td>
      <td>{{$repair->descriptionOfTheFault}}</td>
      <td>{{$repair->comment}}</td>
      <td>tel: {{$repair->customerPhoneNumber}} <br> email: {{$repair->customerEmail}} </td>
      <td>{{$repair->customerFirstName}} {{$repair->customerLastName}} </td>
      <td>{{$repair->status}}</td>
      <td>{{$repair->employee['firstName']}} {{$repair->employee['lastName']}}</td>
    </tr>
@endforeach
  </tbody>

</table>
{{$repairs}}

@endsection

