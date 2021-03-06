<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/MD/css/materialize.min.css"/>
      <link type="text/css" rel="stylesheet" href="/MD/css/codex.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body bgcolor="00B8D7">

<div class="container">
    <div id="logo">
      <img src="/MD/Assets/Codex Logo icon.png" id="logo" height="60" width="267">
    </div>

    <div class="row" id="inicio">
    <form class="col s12" role="form" method="POST" action="{{ url('/xyz/admin/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="input-field col s12">
        <input name="email" type="email" class="validate">
          <label for="email" data-error="Mal!" data-success="Bien!">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
        <div class="col s6 offset s3">
        <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
    <i class="material-icons left">send</i>
  </button>
        </div>
      </div>
    </form>
  </div>

</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/MD/js/materialize.min.js"></script>
    </body>
  </html>
        