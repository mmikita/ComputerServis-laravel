@extends('layouts.admin')
@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rejestracja') }}</div>
<div class="card-body">
                    <form method="POST" action="/admin/addEmployee" aria-label="{{ __('Register') }}">
                        @csrf

                   <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Imie') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('email') }}" required>

                    
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    
                            </div>
                        </div>

   <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Numer telefonu') }}</label>

                            <div class="col-md-6">
                                <input id="phonNumber" name='phoneNumber' type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Powtórz hasło') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Rola</label>
                            <div  class="col-md-6">
                                <select name='role' id=”role>
                                    <option value='employee'>pracownik</option>
                                    <option value='admin'>administrator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0 ">
                        <div class="col-md-6 offset-md-8 ">
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 8px; 
">
                                {{ __('Dodaj') }}
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
