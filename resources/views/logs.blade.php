@extends(Auth::user()->access_role == "supergod" ? 'layouts.super_dashboard' : (Auth::user()->access_role == "god" ? 'layouts.dashboard' : 'layouts.admin_dashboard'))

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
        Logs
      </div>
    </div>
    
    <table class="ui small celled table display" id="dtable">
      <thead>
        <th>Verdict</th>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
        <th>Authoriser's Name</th>
        <th>Created At</th>
      </thead>
      <tbody>
          
        @foreach ($verdicts as $item)
            <tr>
              <td><i class="{{ $item->status != 0 ? 'checkmark box' : 'thumbs outline down' }} icon"></i></td>
              <td><a href="/super_dashboard/employee_info/{{ $item->pending_lists->id}}">{{ $item->pending_lists->first_name}}</a></td>
              <td>{{ $item->pending_lists->last_name}} {{ $item->pending_lists->middle_name}}</td>
              <td>{{ $item->pending_lists->service_no}}</td>
              <td>{{ $item->pending_lists->department}}</td>
              <td>{{ $item->pending_lists->employment_date}}</td>
              <td>{{ $item->user->name}}</td>
              <td>{{ $item->created_at}}</td>
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