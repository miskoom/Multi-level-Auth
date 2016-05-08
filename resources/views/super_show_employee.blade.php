@extends('layouts.super_dashboard')

@section('content')
    <div class="ui attached message">
      <div class="header">
        Authorization Status for <a href="/employee_info/{{$targetEmployee->id}}">{{$targetEmployee->first_name}}, {{$targetEmployee->middle_name}} {{$targetEmployee->last_name}}</a>
      </div>
      <p>Autorization history for the user.</p>
    </div>
    <table class="ui bottom attached celled table">
        <tr>
            <td>Full Name</td>
            <td>{{ $targetEmployee->first_name}}, {{ $targetEmployee->middle_name}} {{ $targetEmployee->last_name}}</td>
        </tr>
        <tr>
            <td>Department</td>
            <td>{{ $targetEmployee->department}}</td>
        </tr>
        <tr>
            <td>Service Number</td>
            <td>{{ $targetEmployee->service_no}}</td>
        </tr>
        <tr>
            <td>Employment Date</td>
            <td>{{ $targetEmployee->employment_date}}</td>
        </tr>
        <tr>
            <td>Added By</td>
            <td>{{ $targetEmployee->user->name}}</td>
        </tr>
        <tr>
            <td>Created Date</td>
            <td>{{ $targetEmployee->created_at}}</td>
        </tr>
    </table>
    <?php
    $count = count($employee);
    if($count != 0){
    ?>
    <table class="ui celled table">
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
    <?php
    }
    ?>
    <br/>
    @if ($showConfirm && $targetEmployee->status == 0)
    {!! Form::open(array('url' => '/super_dashboard/employee/' . $targetEmployee->id, 'method'=>'POST', 'class'=>'ui small equal width form')) !!}
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