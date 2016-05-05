@extends('layouts.dashboard')

@section('content')
    <div class="ui attached message">
      <div class="header">
        Authorization Status for {{$targetEmployee->first_name}}
      </div>
      <p>Autorization history for the user.</p>
    </div>
    
    <table class="ui bottom attached celled table">
      <thead>
        <th>Verdict</th>
        <th>Authoriser's Name</th>
        <th>Comment</th>
        <th>When</th>
      </thead>
      <tbody>
          
        @foreach ($employee as $item)
            <tr>
              <td><i class="{{ $item->status != 0 ? 'checkmark box' : 'thumbs outline down' }} icon"></i></td>
              <td>{{ $item->user->name}}</td>
              <td>{{ $item->comment}}</td>
              <td>{{ $item->created_at}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    
    <script type="text/javascript">
    $( document ).ready(function() {
        
    });
    </script>
@stop