@extends('mail.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user -> name}}: {{$action}}</div>

                <div class="card-body">

                 <h3> NAME: {{$chocolate -> name}}</h3>
                  <ul>
                      <li>
                        <h4>TYPE:</h4> {{$chocolate -> types}}
                        <h4>CALORY:</h4> {{$chocolate -> calory}}
                        <h4>PRICE in Euro:</h4> {{$chocolate -> price}}
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
