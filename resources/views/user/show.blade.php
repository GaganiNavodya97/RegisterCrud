@extends('user.layout')
@section('content')


<div class="card">
  <div class="card-header">Registered User</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Full Name : {{ $user->full_name }}</h5>
        <p class="card-text">Town : {{ $user->Town }}</p>
        <p class="card-text">tele Phone : {{ $user->tp_no }}</p>
        
  </div>

    <hr>

  </div>
</div>
