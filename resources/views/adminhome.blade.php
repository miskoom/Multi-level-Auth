@extends('layouts.dashboard')

@section('content')
    <form>
    <table class="ui bottom attached celled table">
      <thead>
        <th><input type="checkbox" name="selectAll" /></th>
        <th>Full Name</th>
        <th>Service No</th>
        <th>Department</th>
        <th>Employment Date</th>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" name="selected['a']" /></td>
          <td>15</td>
          <td>15</td>
          <td>26g</td>
          <td>8g</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="selected['b']" /></td>
          <td>15</td>
          <td>11</td>
          <td>21g</td>
          <td>16g</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="selected['c']" /></td>
          <td>15</td>
          <td>34</td>
          <td>43g</td>
          <td>11g</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="selected['d']" /></td>
          <td>15</td>
          <td>41</td>
          <td>40g</td>
          <td>30g</td>
        </tr>
        <tr>
          <td><input type="checkbox" name="selected['e']" /></td>
          <td>15</td>
          <td>41</td>
          <td>44g</td>
          <td>28g</td>
        </tr>
      </tbody>
    </table>
    <span><button class="ui primary button">Approve </button></span>
    <span><button class="ui button">Disapprove </button></span>
    </form>
@stop