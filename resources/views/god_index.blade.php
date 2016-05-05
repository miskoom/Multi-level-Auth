@extends('layouts.dashboard')

@section('content')
    <div class="ui attached message">
      <div class="header">
        List of staff!
      </div>
      <p>List of employees submitted for inclusion into the payroll system.</p>
    </div>
    
    <table class="ui small bottom attached celled table">
      <thead>
        <th>Status</th>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
        <!--<th>Added By</th>-->
        <!--<th>Created At</th>-->
      </thead>
      <tbody>
          
        @foreach ($lists as $item)
            <tr>
              <td><i class="{{ $item->status != 0 ? 'checkmark box' : 'thumbs outline down' }} icon"></i></td>
              <td><a href="/dashboard/employee/{{ $item->id}}">{{ $item->first_name}}</a></td>
              <td>{{ $item->last_name}} {{ $item->middle_name}}</td>
              <td>{{ $item->service_no}}</td>
              <td>{{ $item->department}}</td>
              <td>{{ $item->employment_date}}</td>
              <!--<td>{{ $item->user->name}}</td>-->
              <!--<td>{{ $item->created_at}}</td>-->
            </tr>
        @endforeach
      </tbody>
    </table>
    
    <script type="text/javascript">
    $( document ).ready(function() {
        
    });
    </script>
@stop