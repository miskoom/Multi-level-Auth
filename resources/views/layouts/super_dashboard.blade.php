<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Payroll Auth - Dashboard</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
  <script type="text/javascript" src="/uilib/semantic.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/uilib/semantic.min.css">
  @yield('stylesheets')
  @yield('scripts')
  <script type="text/javascript">

  </script>

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed tilt menu">
    <div class="ui container">
      <a href="#" class="header item">
        <img class="logo" src="/assets/images/logo.png">
        Payroll Auth
      </a>
      <a href="/super_dashboard" class="item">Home</a>
      <a class="item" href="/super_dashboard/add_employee">Add Employee</a>
      <a class="item" href="/super_dashboard/payroll">Payroll</a>
      <a class="item" href="/logs">Logs</a>
      <div class="ui simple dropdown item">
        User <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="/user">Users</a>
          <a class="item" href="/user/create">Create User</a>
        </div>
      </div>
      <div class="right menu">
        <!--
        <div class="item">
          <div class="ui icon input">
            <input placeholder="Search..." type="text">
            <i class="search link icon"></i>
          </div>
        </div>-->
        <a class="ui item" href="/logout">Log out [{{Auth::user()->name}}]</a>
      </div>
    </div>
  </div>


  <div class="ui main">
    <!--<h1 class="ui header">List of names to approve</h1>-->
    <div class="ui page grid" style="min-height: 350px;margin-top: 50px;">
        <div class="column">
        @yield('content')
        </div>
    </div>
  </div>
  @include('subviews.footer')
</body>

</html>
