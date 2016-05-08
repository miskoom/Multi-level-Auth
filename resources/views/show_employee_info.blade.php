@extends('layouts.super_dashboard')

@section('content')
    <div class="ui attached message">
      <div class="header">
        Record for {{$employee->first_name}}, {{$employee->middle_name}} {{$employee->last_name}}
      </div>
    </div>
    <table class="ui bottom attached celled table">
        <tr>
            <td>Full Name</td>
            <td>{{ $employee->first_name}}, {{ $employee->middle_name}} {{ $employee->last_name}}</td>
        </tr>
        <tr>
            <td>Department</td>
            <td>{{ $employee->department}}</td>
        </tr>
        <tr>
            <td>Service Number</td>
            <td>{{ $employee->service_no}}</td>
        </tr>
        <tr>
            <td>Employment Date</td>
            <td>{{ $employee->employment_date}}</td>
        </tr>
        <tr>
            <td>Added By</td>
            <td>{{ $employee->user->name}}</td>
        </tr>
        <tr>
            <td>Created Date</td>
            <td>{{ $employee->created_at}}</td>
        </tr>
    </table>
    
    <script type="text/javascript">
    $( document ).ready(function() {
        
    });
    </script>
@stop