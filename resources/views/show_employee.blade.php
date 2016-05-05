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
    @if ($showConfirm && $targetEmployee->status == 0)
    {!! Form::open(array('url' => '/dashboard/employee/' . $targetEmployee->id, 'method'=>'POST', 'class'=>'ui small equal width form')) !!}
    <span><input type="submit" name="confirm" class="ui positive button" value="Confirm"></span>
    {!! Form::close() !!}
    @endif
    
    @if ($targetEmployee->status == 1)
    <span><div name="confirm" class="ui button disabled">Confirmed!!</div>
    @endif
    
    <script type="text/javascript">
    $( document ).ready(function() {
        
    });
    </script>
@stop