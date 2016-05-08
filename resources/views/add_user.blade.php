@extends('layouts.super_dashboard')

@section('content')

  @if (count($errors) > 0)
        <div class="ui message" style="color:#9F3A38;font-size: 1em;box-shadow: 0px 0px 0px 1px #E0B4B4 inset, 0px 0px 0px 0px transparent; background-color: #FFF6F6;">
            <ul class="list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
  @endif
    
   {!! Form::open(array('url' => '/user/create', 'method'=>'POST', 'class'=>'ui small equal width form')) !!}
      <h4 class="ui dividing header">User Information</h4>
      
      <div class="fields">
        <div class="required field">
          <label>Full Name</label>
          <input name="name" placeholder="Name" type="text">
        </div>
      </div>
      
      <div class="fields">
        <div class="required field">
          <label>Email:</label>
          <input name="email" placeholder="Email" type="text">
        </div>
      </div>
      
      <div class="fields">
        <div class="required field">
          <label>Password:</label>
          <input name="password" placeholder="Password" type="password">
        </div>
      </div>
      
      <div class="grouped fields">
        <label>Access Role</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input value="user" class="hidden" tabindex="0" name="access_role" type="radio">
        <label>User</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input value="god" class="hidden" tabindex="0" name="access_role" type="radio">
        <label>Manager</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input value="supergod" class="hidden" tabindex="0" name="access_role" type="radio">
        <label>Super User</label>
      </div>
    </div>
  </div>
      
    <span><input type="submit" name="approve" class="ui primary button" value="Add User"></span>
    {!! Form::close() !!}
    
    <script type="text/javascript">
    $( document ).ready(function() {
		  $('.ui.radio.checkbox').checkbox();
    });
    </script>
@stop