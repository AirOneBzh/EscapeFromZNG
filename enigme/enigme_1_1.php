<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>EscapeFromZNG</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/assets/css/master.css">
<script src="/assets/js/chrono.js" charset="utf-8"></script>
<body onload="chronoStart()">

  <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/php/gen_nav.php';
  ?>

  <div class="zng-center zng-margin-top">
    <div class="zng-solo">
      <div class="zng-card" >
        <h2>Enigme 1 <span id="Enisuiv" class="zng-hidden">0</span></h2>
        <div class="container">
          <form >
            <label>Mot a deviner :
              <input autocomplete="off" type="password" id="mot" maxlength="27" autofocus required="required"/>
            </label>
          </form>
        </div>
      </div>
    </div>

  </div>
  

  <script src="/assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
