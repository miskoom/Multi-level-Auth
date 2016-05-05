@extends('layouts.dashboard')

@section('content')
   <form class="ui small equal width form">
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
          <div class="required ten wide field">
            <label>Department</label>
            <input name="department" placeholder="Department" type="text">
          </div>
          <div class="required five wide field">
              <label>Service No</label>
            <input name="service_number" placeholder="Service No" type="text">
          </div>
        </div>
  </div>
  
  
  </form>
@stop