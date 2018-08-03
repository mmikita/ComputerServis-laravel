@extends('layouts.admin')


@section('content')
<div class="container"  >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<div class="card-body">


    tu bedzie id

    {{$id}}
                    <form method="POST" action="/admin/editRepair">
                        @csrf

      
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
