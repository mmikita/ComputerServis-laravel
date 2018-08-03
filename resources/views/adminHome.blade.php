@extends('layouts.admin')

@section('content')

<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">model komputera</th>
      <th scope="col"  width="25%">opis usterki</th>
      <th scope="col">status</th>
      <th scope="col" width="75%">uwagi</th>
      <th scope="col">klient-kontakt</th>
      <th scope="col">Data rozpoczęcia</th>
      <th scope="col">Pracownik(przydziel)</th>
      <th scope="col">Edytuj</th>
      <th scope="col">Usuń</th>
    </tr>
</thead>
<tbody>
  	   @foreach($repairs as $repair)
    <tr>
      <td>{{$repair->id}}</td>
      <td>{{$repair->computerModel}}</td>
      <td>{{$repair->descriptionOfTheFault}}</td>
    <td>
          <!-- szybka zmiana stanu -->
          <form  method="post" action="/admin/updateRepair">
                                 {{csrf_field()}}

            <input id="id" name="id" type="hidden" value="{{$repair->id}}" /> 
          <select  onchange="this.form.submit()"
              id="status" name="status">
              <option value ='oczekujące na zatwierdzenie' {{ $repair->status === 'oczekujące na zatwierdzenie' ? 'selected' : '' }}>oczekujące na zatwierdzenie</option>
              <option value='oczekujace na przydział pracownika' {{ $repair->status === 'oczekujace na przydział pracownika' ? 'selected' : '' }}> oczekujace na przydział pracownika</option>
              <option value='w trakcie naprawy' {{ $repair->status === 'w trakcie naprawy' ? 'selected' : 'naprawione-oczekujace na odbiór' }}>w trakcie naprawy</option>
              <option value='' {{ $repair->status === 'naprawione-oczekujace na odbiór' ? 'selected' : '' }}>naprawione-oczekujace na odbiór</option>
              <option value='odrzuconr' {{ $repair->status === 'odrzucone' ? 'selected' : '' }}>odrzucone</option>
              <option value='nieoczekiwany problem podczas naprawy' {{ $repair->status === 'nieoczekiwany problem podczas naprawy' ? 'selected' : '' }}>nieoczekiwany problem podczas naprawy</option>
              </select>
          </form>
        </td>
      <td>{{$repair->comment}}</td>
      <td>to ja cie znajde</td>
      <td>{{$repair->created_at}}</td>
          <td>
          <!-- szybka zmiana stanu -->
          <form  method="post" action="/admin/updateRepair">
                                 {{csrf_field()}}
          <input id="id" name="id" type="hidden" value="{{$repair->id}}" /> 
       <select  name="item_id">
   
    @foreach($employees as $emp)
      <option value="{{$emp->id}}" {{ $emp->id === $repair->employee['id'] ? 'selected' : ''}}>{{$emp->firstName}} {{$emp->lastName}}</option>
    @endforeach

  </select>
          </form>
        </td>
      <td>klik</td>
      <td>klik</td>
    </tr>
@endforeach
  </tbody>

</table>
{{$repairs}}

@endsection


<!-- 
<td>{{$repair->employee['lastName']}}</td>
