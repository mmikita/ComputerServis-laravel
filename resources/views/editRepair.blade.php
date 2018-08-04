@extends('layouts.admin')


@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">



                    <form method="POST" action="/admin/editRepair">
                        @csrf
                                  <input id="id" name="id" type="hidden" class="form-control" value="{{$repair->id}}">
                        <div class="form-group row">
                            <label for="computerModel" class="col-md-4 col-form-label text-md-right">{{ __('model komputera') }}</label>

                            <div class="col-md-6">
                                <input id="computerModel" name="computerModel" type="text" class="form-control" value="{{$repair->computerModel}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerFirstName" class="col-md-4 col-form-label text-md-right">{{ __('Imie klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerFirstName" name="customerFirstName" type="text" class="form-control" value="{{$repair->customerFirstName}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerLastName" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerLastName" name="customerLastName" type="text" class="form-control" value="{{$repair->customerLastName}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerPhoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Numer telefonu') }}</label>

                            <div class="col-md-6">
                                <input id="customerPhoneNumber" name="customerPhoneNumber" type="text" class="form-control" value="{{$repair->customerPhoneNumber}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="customerEmail" class="col-md-4 col-form-label text-md-right">{{ __('Email klienta') }}</label>

                            <div class="col-md-6">
                                <input id="customerEmail" name="customerEmail" type="text" class="form-control" value="{{$repair->customerEmail}}">
                            </div>
                        </div>





                        <div class="form-group row">
                          <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label> 
                          <div class="col-md-6">
                            <select id="status" name="status">


                                <option value ='oczekujące na zatwierdzenie' {{ $repair->status === 'oczekujące na zatwierdzenie' ? 'selected' : '' }}>oczekujące na zatwierdzenie</option>
                                <option value='oczekujace na przydział pracownika' {{ $repair->status === 'oczekujace na przydział pracownika' ? 'selected' : '' }}> oczekujace na przydział pracownika</option>
                                <option value='w trakcie naprawy' {{ $repair->status === 'w trakcie naprawy' ? 'selected' : 'naprawione-oczekujace na odbiór' }}>w trakcie naprawy</option>
                                <option value='' {{ $repair->status === 'naprawione-oczekujace na odbiór' ? 'selected' : '' }}>naprawione-oczekujace na odbiór</option>
                                <option value='odrzuconr' {{ $repair->status === 'odrzucone' ? 'selected' : '' }}>odrzucone</option>
                                <option value='nieoczekiwany problem podczas naprawy' {{ $repair->status === 'nieoczekiwany problem podczas naprawy' ? 'selected' : '' }}>nieoczekiwany problem podczas naprawy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="padding-top: 5px">
                       <label for="employee_id" class="col-md-4 col-form-label text-md-right">{{ __('pracownik') }}</label> 


                       <div class="col-md-6">
                          <select  name='employee_id'>

                            @foreach($employees as $emp)

                            <option value='{{$emp->id}}' {{ $emp->id === $repair->employee['id'] ? 'selected' : ''}}>{{$emp->firstName}} {{$emp->lastName}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descriptionOfTheFault" class="col-md-4 col-form-label text-md-right">{{ __('opis usterki') }}</label>

                    <div class="col-md-6">
                        <textarea  id="descriptionOfTheFault" name="descriptionOfTheFault" type="text" class="form-control">{{$repair->descriptionOfTheFault}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('uwagi') }}</label>

                    <div class="col-md-6">
                        <textarea  id="comment" name="comment" type="text" class="form-control">{{$repair->comment}}</textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary" style="margin-bottom: 8px; 
                ">
                {{ __('Aktualizuj') }}
            </button>


        </form>

    </div>
</div>
</div>
</div>
</div>
@endsection
