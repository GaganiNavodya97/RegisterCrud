@extends('user.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('user/' .$user->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id" />
        <label>Full Name</label><br>
        <input type="text" name="full_name" id="full_name" value="{{$user->full_name}}" class="form-control"><br>
        <label>Address</label><br>
        <input type="text" name="Town" id="Town" value="{{$user->Town}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="tp_no" id="tp_no" value="{{$user->tp_no}}" class="form-control"><br>
        <label>Email</label><br>
        <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop
