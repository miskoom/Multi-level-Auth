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
      <a href="/dashboard" class="item">Home</a>
      <a class="item" href="/dashboard/add_employee">Add Employee</a>
      <div class="right menu">
        <!--
        <div class="item">
          <div class="ui icon input">
            <input placeholder="Search..." type="text">
            <i class="search link icon"></i>
          </div>
        </div>-->
        <a class="ui item" href="/logout">Log out</a>
      </div>
    </div>
  </div>

  <div class="ui main text container" style="min-height: 350px;">
    <!--<h1 class="ui header">List of names to approve</h1>-->
    <div class="column">
        @yield('content')
  </div>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <!--<div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      -->
      <div class="ui inverted section divider"></div>
      <img src="/assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">&copy 2016 nHubNigeria</a>
        <!--<a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>-->
      </div>
    </div>
  </div>
</body>

</html>
