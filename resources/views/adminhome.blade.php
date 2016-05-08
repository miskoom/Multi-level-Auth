@extends('layouts.admin_dashboard')
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
    @if (count($errors) > 0)
        <div class="ui message" style="color:#9F3A38;font-size: 1em;box-shadow: 0px 0px 0px 1px #E0B4B4 inset, 0px 0px 0px 0px transparent; background-color: #FFF6F6;">
            <ul class="list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="ui message">
      <div class="header">
        List of staff Pending Approval!
      </div>
      <p>Select the names of employees below to approve or disapprove for inclusion into the payroll.</p>
    </div>
    
    {!! Form::open(array('url' => '/send_verdict', 'method'=>'POST', 'class'=>'ui small equal width form')) !!}
    <table class="ui bottom celled table" id="dtable">
      <thead>
        <th>
          <div class="ui checkbox">
            <input class="hidden" name="selectAll" type="checkbox" id="checkAll"/>
            <label for="">All</label>
          </div>
        </th>
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
                  <div class="inline field">
                    <div class="ui checkbox">
                      <input class="hidden" type="checkbox" name="selected[]" value="{{ $item->id }}" />
                    </div>
                  </div>
              </td>
              <td><a href="/employee_info/{{$item->id}}">{{ $item->first_name}}</a></td>
              <td>{{ $item->last_name}} {{ $item->middle_name}}</td>
              <td>{{ $item->service_no}}</td>
              <td>{{ $item->department}}</td>
              <td>{{ $item->employment_date}}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
      <div class="field">
        <label>Comment</label>
        <textarea rows="2" name="comment"></textarea>
      </div>
    <br/>
    <div class="ui buttons">
      <button class="ui button" name="disapprove" value="Disapprove">Disapprove</button>
      <div class="or"></div>
      <button class="ui positive button" name="approve" value="Approve">Approve</button>
    </div>
    {!! Form::close() !!}
    <script type="text/javascript">
    $( document ).ready(function() {
        $("#checkAll").change(function () {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
    });
    
    $('.ui.checkbox').checkbox();
    $('#dtable').DataTable();
    </script>
@stop