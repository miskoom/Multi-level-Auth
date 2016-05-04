@extends('layouts.dashboard')

@section('content')
    {!! Form::open(array('url' => '/send_verdict', 'method'=>'POST', 'class'=>'ui large form')) !!}
    <table class="ui bottom attached celled table">
      <thead>
        <th><input type="checkbox" name="selectAll" id="checkAll"/></th>
        <th>First Name</th>
        <th>other Names</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
      </thead>
      <tbody>
          
        @foreach ($pendingLists as $item)
            <tr>
              <td><input type="checkbox" name="selected[]" value="{{ $item->id }}" /></td>
              <td>{{ $item->first_name}}</td>
              <td>{{ $item->middle_name}}, {{ $item->last_name}}</td>
              <td>{{ $item->service_no}}</td>
              <td>{{ $item->department}}</td>
              <td>2016</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <span><input type="submit" name="approve" class="ui primary button" value="Approve"></span>
    <span><input type="submit" name="disapprove" class="ui button" value="Disapprove"></span>
    {!! Form::close() !!}
    <script type="text/javascript">
    $( document ).ready(function() {
        $("#checkAll").change(function () {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
    });
    </script>
@stop