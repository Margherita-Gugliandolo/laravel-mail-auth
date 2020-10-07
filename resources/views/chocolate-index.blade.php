@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chocolates: </div>

                <div class="card-body">
                  <ul>
                    @foreach ($chocolates as $chocolate)
                      <li>

                        <h3>
                          <a href="{{route('chocolate-show', $chocolate -> id)}}">
                          {{$chocolate -> name}}
                          </a>
                        </h3>
                        {{$chocolate -> description}}<br>

                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
