@extends('layouts.dashboard')

@section('scripts')
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.semanticui.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
@stop

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.semanticui.min.css"/>
@stop

@section('content')
    <div class="ui message">
      <div class="header">
        List of staff!
      </div>
      <p>List of employees submitted for inclusion into the payroll system.</p>
    </div>
    
    <table class="ui small celled table display" id="dtable">
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
		  $('#dtable').DataTable();
    });
    </script>
@stop