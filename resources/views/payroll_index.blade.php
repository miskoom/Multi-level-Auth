@extends('layouts.super_dashboard')

@section('scripts')
  <!--<script type="text/javascript" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>-->
  <script type="text/javascript" src="https://cdn.datatables.net/r/zf-5.5.2/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
@stop

@section('stylesheets')
  <!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">-->
  <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/zf-5.5.2/jqc-1.11.3,dt-1.10.8/datatables.min.css">-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/zf-5.5.2/jqc-1.11.3,dt-1.10.8/datatables.min.css"/>
@stop

@section('content')
    <div class="ui message">
      <div class="header">
        Payroll
      </div>
    </div>
    
    <table class="ui small celled table display" id="dtable">
      <thead>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
        <!--<th>Added By</th>-->
        <!--<th>Created At</th>-->
      </thead>
      <tbody>
          
        @foreach ($pendingLists as $item)
            <tr>
              <td><a href="/super_dashboard/employee/{{ $item->id}}">{{ $item->first_name}}</a></td>
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