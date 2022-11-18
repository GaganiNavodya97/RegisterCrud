@extends('user.layout')
@section('content')

<div class="card">
  <div class="card-header">User Register Page</div>
  <div class="card-body">

      <form action="{{ url('/user') }}" method="post">
        {!! csrf_field() !!}
        <label>Full Name</label><br>
        <input type="text" name="full_name" id="full_name" class="form-control"><br>
        <label>Town</label><br>
        <input type="text" name="Town" id="Town" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="tp_no" id="tp_no" class="form-control"><br>
        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
