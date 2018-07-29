@extends('layouts.admin')
@section('content')

<form method="post" action="{{ route('employee.add') }}">
                     {{csrf_field()}}

   

   <div class="form-group">
    <label for="firstName">Imie:</label>
    <input type="text" class="form-control" id="firstName" name='firstName'>
  </div>

   <div class="form-group">
    <label for="firstName">Nazwisko:</label>
    <input type="text" class="form-control" id="lastName" name='lastName'>
  </div>

   <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name='email'>
  </div>
  <div class="form-group">
    <label for="pwd">Haslo:</label>
    <input type="password" class="form-control" id="password" name = password>
  </div>



          <div class="form-group">
                            <label>Rola</label>
                         
                                <select class="form-control"  name=role id='role'>
                                    <option value=”employee”>pracownik</option>
                                    <option value=”admin”>administrator</option>
                                </select>
                        </div>




  <button type="submit" class="btn btn-default">Dodaj pracownika</button>
</form>
@endsection