@extends('layouts.super_dashboard')

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
        List of Users!
      </div>
    </div>
    
    <table class="ui small celled table display" id="dtable">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Access Role</th>
        <th>Created At</th>
      </thead>
      <tbody>
          
        @foreach ($users as $item)
            <tr>
              <td><!--<a href="/user/{{ $item->id}}">-->{{ $item->name}}<!--</a>--></td>
              <td>{{ $item->email}}</td>
              <td>
                @if ($item->access_role == "user")
                    {{ 'User' }}
                @elseif ($item->access_role == "god")
                    {{ 'Manager' }}
                @elseif ($item->access_role == "supergod")
                    {{ 'Super User' }}
                @else
                    {{ 'Unknown' }}
                @endif
                </td>
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