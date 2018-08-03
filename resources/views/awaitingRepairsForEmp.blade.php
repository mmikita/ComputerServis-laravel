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
    <td>
          <!-- szybka zmiana stanu -->
          <form method="post" action="/serwis/updateOne">
          <select
              id="status" name="status">
              <option {{ $repair->status === 'oczekujące na zatwierdzenie' ? 'selected' : '' }}>oczekujące na zatwierdzenie</option>
              <option {{ $repair->status === 'oczekujace na przydział pracownika' ? 'selected' : '' }}> oczekujace na przydział pracownika</option>
              <option {{ $repair->status === 'w trakcie naprawy' ? 'selected' : '' }}>w trakcie naprawy</option>
              <option {{ $repair->status === 'naprawione-oczekujace na odbiór' ? 'selected' : '' }}>naprawione-oczekujace na odbiór</option>
              <option {{ $repair->status === 'odrzucone' ? 'selected' : '' }}>odrzucone</option>
              <option {{ $repair->status === 'nieoczekiwany problem podczas naprawy' ? 'selected' : '' }}>nieoczekiwany problem podczas naprawy</option>
              </select>
          </form>


        </td>      <td>{{$repair->comment}}</td>
      <td>{{$repair->created_at}}</td>
      <td>{{$repair->employee['lastName']}}</td>
    </tr>
@endforeach
  </tbody>

</table>
{{$repairs}}

@endsection



