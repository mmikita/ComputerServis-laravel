@extends('layouts.employee')

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
      <th scope="col">imie naziwsko klienta</th>
  <th scope="col"> status</th>
      <th scope="col">Odrzuć naprawę</th>
      <th scope="col">Zakończ naprawę</th>
      <th scope="col">Edytuj naprawę</th>
          <th scope="col">Data rozpoczęcia</th>
    </tr>
</thead>
<tbody>
       @foreach($repairs as $repair)
    <tr>
      <td>{{$repair->id}}</td>
      <td>{{$repair->computerModel}}</td>
      <td>{{$repair->descriptionOfTheFault}}</td>
    <td>

         {{$repair->status}}
        </td>
      <td>{{$repair->comment}}</td>
      <td>tel: {{$repair->customerPhoneNumber}} <br> email: {{$repair->customerEmail}} </td>
      <td>{{$repair->customerFirstName}} {{$repair->customerLastName}} </td>
         <td>
          <!-- szybka zmiana stanu -->
          <form  method="post" action="/employee/changeRepairStatus">
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
                    <option value='zakonczone' {{ $repair->status === 'zakonczone' ? 'selected' : '' }}>zakonczone</option>
              </select>
          </form>
        </td>
    
  
      <td><a href="/employee/rejectRepair?id={{$repair->id}}">Odrzuć</a></td>
      <td><a href="/employee/finishRepair?id={{$repair->id}}">Zakończ</a></td>
      <td><a href="/employee/editRepair?id={{$repair->id}}">Edytuj</a></td>
     
        <td>{{$repair->created_at}}</td>
    </tr>
@endforeach
  </tbody>

</table>
{{$repairs}}

@endsection

