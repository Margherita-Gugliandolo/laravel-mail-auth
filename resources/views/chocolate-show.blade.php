@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Details: </div>

                <div class="card-body">
                  <ul>
                      <h3>NAME: {{$chocolate -> name}}</h3>
                      <li>
                        <h4>TYPE:</h4> {{$chocolate -> types}}
                        <h4>CALORY:</h4> {{$chocolate -> calory}}
                        <h4>PRICE in Euro:</h4> {{$chocolate -> price}}
                      </li>
                    </ul>
                   @auth
                     <a class="btn btn-primary" href="{{route('chocolate-edit', $chocolate -> id)}}">
                       EDIT
                     </a>
                     <a class="btn btn-danger" href="{{route('chocolate-delete', $chocolate -> id)}}">
                       DELETE
                     </a>
                   @else
                     <a class="btn btn-primary" href="{{route('login')}}">LOGIN</a>
                   @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
