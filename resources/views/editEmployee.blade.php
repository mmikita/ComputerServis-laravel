@extends('layouts.admin')
@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="/admin/editEmployee">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Imie') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="firstName" value="{{$employee->firstName}}" required>


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="lastName" value="{{$employee->lastName}}" required autofocus>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$employee->email}}" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Numer telefonu') }}</label>

                            <div class="col-md-6">
                                <input id="phonNumber" name='phoneNumber' type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$employee->phoneNumber}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Rola</label>
                            <div  class="col-md-6">
                              <select
                              id="role" name="role">
                              <option value ='employee' {{ $employee->role === 'employee' ? 'selected' : '' }}>pracownik</option>

                              <option value ='employee' {{ $employee->role === 'admin' ? 'selected' : '' }}>administrator</option>


                          </select>
                      </div>
                  </div>
              </div>






























              <div class="form-group row mb-0 ">
                <div class="col-md-6 offset-md-8 ">
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 8px; 
                    ">
                    {{ __('Edytuj') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
