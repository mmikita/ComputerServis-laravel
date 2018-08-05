@extends('layouts.admin')


@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">



                    <form method="POST" action="/admin/addRepair">
                        @csrf
                                  <input id="id" name="id" type="hidden" class="form-control">
                        <div class="form-group row">
                            <label for="computerModel" class="col-md-4 col-form-label text-md-right">{{ __('model komputera') }}</label>

                            <div class="col-md-6">
                                <input id="computerModel" name="computerModel" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerFirstName" class="col-md-4 col-form-label text-md-right">{{ __('Imie klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerFirstName" name="customerFirstName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerLastName" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerLastName" name="customerLastName" type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerPhoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Numer telefonu klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerPhoneNumber" name="customerPhoneNumber" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerEmail" class="col-md-4 col-form-label text-md-right">{{ __('Email klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerEmail" name="customerEmail" type="text" class="form-control">
                            </div>
                        </div>





                        <div class="form-group row">
                          <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label> 
                          <div class="col-md-6">
                            <select id="status" name="status">


                                <option value ='oczekujące na zatwierdzenie'>oczekujące na zatwierdzenie</option>
                                <option value='oczekujace na przydział pracownika'> oczekujace na przydział pracownika</option>
                                <option value='w trakcie naprawy'>w trakcie naprawy</option>
                                <option value=''>naprawione-oczekujace na odbiór</option>
                                <option value='odrzuconr'>odrzucone</option>
                                <option value='nieoczekiwany problem podczas naprawy'>nieoczekiwany problem podczas naprawy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="padding-top: 5px">
                       <label for="employee_id" class="col-md-4 col-form-label text-md-right">{{ __('pracownik') }}</label> 


                       <div class="col-md-6">
                          <select  name='employee_id'>

                            @foreach($employees as $emp)

                            <option value='{{$emp->id}}'>{{$emp->firstName}} {{$emp->lastName}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descriptionOfTheFault" class="col-md-4 col-form-label text-md-right">{{ __('opis usterki') }}</label>

                    <div class="col-md-6">
                        <textarea  id="descriptionOfTheFault" name="descriptionOfTheFault" type="text" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('uwagi') }}</label>

                    <div class="col-md-6">
                        <textarea  id="comment" name="comment" type="text" class="form-control"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary" style="margin-bottom: 8px; 
                ">
                {{ __('Dodaj naprawe') }}
            </button>


        </form>

    </div>
</div>
</div>
</div>
</div>
@endsection
