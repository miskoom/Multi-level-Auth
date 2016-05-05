@extends('layouts.dashboard')

@section('content')
    <div class="ui attached icon info message">
      <i class="info circle icon"></i>
      <div class="content">
        List of names to approve
      </div>
    </div>
    
    {!! Form::open(array('url' => '/send_verdict', 'method'=>'POST', 'class'=>'ui large form')) !!}
    <table class="ui bottom attached celled table">
      <thead>
        <th>
          <!--<input type="checkbox" name="selectAll" id="checkAll"/></th>-->
          
          <div class="ui form">
                  <div class="inline field">
                    <div class="ui checkbox">
                      <input class="hidden" name="selectAll" type="checkbox" id="checkAll"/>
                      <label for="">All</label>
                    </div>
                  </div>
                </div>
                
        <th>First Name</th>
        <th>other Names</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
      </thead>
      <tbody>
          
        @foreach ($pendingLists as $item)
            <tr>
              <td>
                
                <div class="ui form">
                  <div class="inline field">
                    <div class="ui checkbox">
                      <input class="hidden" type="checkbox" name="selected[]" value="{{ $item->id }}" />
                    </div>
                  </div>
                </div>
              </td>
              <td>{{ $item->first_name}}</td>
              <td>{{ $item->middle_name}}, {{ $item->last_name}}</td>
              <td>{{ $item->service_no}}</td>
              <td>{{ $item->department}}</td>
              <td>2016</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    
    <div class="ui form">
      <div class="field">
        <label>Comment</label>
        <textarea name="comment"></textarea>
      </div>
    </div>
    
    <br/>
    
    <span><input type="submit" name="approve" class="ui primary button" value="Approve"></span>
    <span><input type="submit" name="disapprove" class="ui button" value="Disapprove"></span>
    {!! Form::close() !!}
    <script type="text/javascript">
    $( document ).ready(function() {
        $("#checkAll").change(function () {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
    });
    
    $('.ui.checkbox').checkbox();
    </script>
@stop