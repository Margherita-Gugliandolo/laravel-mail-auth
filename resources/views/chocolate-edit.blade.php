@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CHOCOLATE EDIT: </div>

                <div class="card-body">
                  <form action="{{route('chocolate-update', $chocolate -> id)}}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                      <label for="name">NAME:</label>
                      <input type="text" name="name" value="{{$chocolate -> name}}">
                       <br>
                      <label for="type">TYPE:</label>
                      <input type="text" name="type" value="{{$chocolate -> types}}">
                       <br>
                      <label for="calory">CALORY:</label>
                      <input type="number" name="calory" value="{{$chocolate -> calory}}">
                       <br>
                      <label for="price">PRICE</label>
                      <input type="number" name="price" value="{{$chocolate -> price}}">
                       <br>
                         <button type="submit" name="button">SAVE</button>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
