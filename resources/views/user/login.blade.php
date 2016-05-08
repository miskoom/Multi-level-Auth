<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login - Payroll Auth</title>
  <link rel="stylesheet" type="text/css" href="/uilib/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/site.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/container.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/header.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/image.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/uilib/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/form.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/input.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/button.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/list.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/message.css">
  <link rel="stylesheet" type="text/css" href="/uilib/components/icon.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
  <script src="/uilib/components/form.js"></script>
  <script src="/uilib/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
      background-image: url('/assets/images/bg-about.jpg');
        background-position: center;
        background-attachment: fixed;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui default image header">
      <img src="/assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    {!! Form::open(array('url' => '/login', 'method'=>'POST', 'class'=>'ui large form')) !!}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="e.g super@payroll.ng">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <!--
        <div class="field">
            <center>{!! Recaptcha::render() !!}</center>    
        </div>
        -->
        
        <div class="ui fluid large teal submit button">Login</div>
      </div>
      
      <div class="ui error message"> </div>

        @if (count($errors) > 0)
        <div class="ui message" style="color:#9F3A38;font-size: 1em;box-shadow: 0px 0px 0px 1px #E0B4B4 inset, 0px 0px 0px 0px transparent; background-color: #FFF6F6;">
            <ul class="list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    {!! Form::close() !!}

    <!--<div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>-->
  </div>
</div>

</body>

</html>
