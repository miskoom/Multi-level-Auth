@extends('layouts.dashboard')

@section('content')
   {!! Form::open(array('url' => '/dashboard/add_employee', 'method'=>'POST', 'class'=>'ui small equal width form')) !!}
      <h4 class="ui dividing header">Personal Information</h4>
      
      <div class="three fields">
        <div class="required field">
          <label>First name</label>
          <input name="first_name" placeholder="First Name" type="text">
        </div>
        <div class="field">
          <label>Middle name</label>
          <input name="middle_name" placeholder="Middle Name" type="text">
        </div>
        <div class="required field">
          <label>Last name</label>
          <input name="last_name" placeholder="Last Name" type="text">
        </div>
      </div>
      
    <div class="field">
        <h4 class="ui dividing header">Employer Information</h4>
        <div class="fields">
          <div class="required five wide field">
            <label>Department</label>
            <input name="department" placeholder="Department" type="text">
          </div>
          <div class="required three wide field">
              <label>Employment Date</label>
            <input name="employment_date" placeholder="Employment Date" type="text">
          </div>
          <div class="required four wide field">
              <label>Service No</label>
            <input name="service_no" placeholder="Service No" type="text">
          </div>
        </div>
  </div>
    <span><input type="submit" name="approve" class="ui primary button" value="Add Employee"></span>
    {!! Form::close() !!}
@stop