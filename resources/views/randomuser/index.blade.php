@extends('layouts.master')

@section('title')
Random User Generator
@stop

@section('content')
<form method='POST' action='/RandomUser'>
<input type='hidden' name='_token' value='{{csrf_token()}}'>
<div class="row">
  <div class="large-12 columns">
    <h3>Number of Users
      <input type="text" placeholder="1-50" id='numUsers' name='numUsers' value={{ old('numUsers') }}>
    </h3>
      <button type='submit' class='button primary'>Generate</button>

    @if(count($errors) > 0)
      <ul data-alert class="callout warning">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div>

  @if(isset($userData))
    <div class="large-12 columns">
      @foreach($userData as $user)
        <h5><b>{{ $user['name'] }}</b></h5>
        <p><b>Birthdate:</b> {{ $user['birthdate'] }}</p>
        <p><b>Phone:</b> {{ $user['phone'] }}</p>
        <p><b>Address:</b> {{ $user['address'] }}</p>
        <p>{{ $user['profile'] }}</p>
        <hr />
        @endforeach
      </div>
  @endif

</form>
@stop
