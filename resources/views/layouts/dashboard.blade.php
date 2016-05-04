<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Payroll Auth - Dashboard</title>

  <link rel="stylesheet" type="text/css" href="/uilib/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/site.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/container.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/header.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/image.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/menu.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/table.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/transition.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/button.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/list.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/icon.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/message.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
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
      <a href="#" class="item">Home</a>
      <!--<div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Link Item</a>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
            </div>
          </div>
          <a class="item" href="#">Link Item</a>
        </div>
      </div>-->
    </div>
  </div>

  <div class="ui main text container" style="min-height: 350px;">
    <!--<h1 class="ui header">List of names to approve</h1>-->

    <div class="ui attached icon info message">
      <i class="info circle icon"></i>
      <div class="content">
        List of names to approve
      </div>
    </div>

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
