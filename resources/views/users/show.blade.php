@extends('layouts.master')

@section('content')
  <ul>
      <li>User Id: {{ $user->id }}</li>
      <li>User Name: {{ $user->userName }}</li>
      <li>User Email: {{ $user->userEmail }}</li>
  </ul>
  @endsection
