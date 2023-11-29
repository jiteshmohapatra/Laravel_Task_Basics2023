@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">city : {{ $students->city }}</p>
        <p class="card-text">phoneno : {{ $students->phoneno }}</p>
  </div>
    </hr>
    </div>
</div>
