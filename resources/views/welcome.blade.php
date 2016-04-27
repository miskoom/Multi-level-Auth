<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Payroll Authentication</title>
  <link rel="stylesheet" type="text/css" href="/uilib/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/site.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/container.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/header.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/image.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/button.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/list.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/icon.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/transition.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
  <script src="/uilib/components/visibility.js"></script>
  <script src="/uilib/components/sidebar.js"></script>
  <script src="/uilib/components/transition.js"></script>
  <script>

  function loginPage(){
      window.location = '/login';
  }

  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    $('#get_started').click(function(e){
      loginPage();
    })

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item">Home</a>
    <!--<a class="item">Work</a>
    <a class="item">Company</a>
    <a class="item">Careers</a>-->
    <div class="right menu">
      <div class="item">
        <a onclick="loginPage();" class="ui button">Log in</a>
      </div>
      <!--<div class="item">
        <a class="ui primary button">Sign Up</a>
      </div>-->
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Home</a>
  <!--<a class="item">Work</a>
  <a class="item">Company</a>
  <a class="item">Careers</a>-->
  <a onclick="loginPage();" class="item">Login</a>
  <!--<a class="item">Signup</a>-->
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui teal vertical masthead center aligned segment">

    <div class="ui container">
      <div class="ui large secondary teal pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
        <!--<a class="item">Work</a>
        <a class="item">Company</a>
        <a class="item">Careers</a>-->
        <div class="right item">
          <a onclick="loginPage();" class="ui teal button">Log in</a>
          <!--<a class="ui inverted button">Sign Up</a>-->
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui teal header">
        Payroll Module
      </h1>
      <h2>Management of the payroll management system</h2>
      <div id="get_started" class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>

  </div>

  <!--
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>-->
</div>

</body>

</html>