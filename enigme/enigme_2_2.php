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
        <h2>Enigme 2 partie 2 <span id="Enisuiv" class="zng-hidden">0</span></h2>
        <?php if ($_GET['reponse']=="Secret") {
          echo "<script type=\"text/javascript\">
          document.location.href=\"enigme_2_2.php\"
          </script>";
        } ?>
        <p>
          <input id="rep" type="text" autofocus placeholder="Reponse">
        </p>
        <p class="enigme">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet dapibus eros, non efficitur lectus. Morbi facilisis consectetur elit, eu tempus quam ultricies at. Donec sollicitudin ligula sit amet justo auctor, in dignissim lacus volutpat. In ante lectus, ornare quis malesuada at, pharetra sagittis diam. Quisque viverra auctor volutpat. Cras in ligula erat. Etiam iaculis rutrum elit, vitae placerat est fringilla ut. Nunc ornare tellus arcu, nec vehicula neque fermentum a.<br/>
          Donec cursus ante et dolor posuere pretium. Quisque hendrerit ante quis libero gravida pharetra. Fusce nec lobortis quam. Vestibulum sapien mi, aliquam vitae placerat ut, dignissim in sem. Praesent eu augue id ante convallis sodales sit amet quis massa. Fusce consequat felis eu augue laoreet luctus ac in nibh. Sed non nulla ac risus cursus pretium ut ut nisi. Vivamus et sollicitudin est, in faucibus justo. Etiam ut venenatis odio. Donec egestas, felis in mattis sodales, magna justo hendrerit quam, ac bibendum leo libero sit amet erat. Cras iaculis iaculis viverra.<br/>
          Pellentesque ex nulla, varius id dapibus id, tincidunt vitae erat. Nulla sagittis suscipit arcu ac consectetur. Phasellus mollis dapibus scelerisque. Nullam dignissim elementum aliquam. Curabitur egestas a dolor ut tristique. Duis non magna ac ante dictum blandit sed vel <a id="No_lien" href="?reponse=Walle" title="Walle" class="lien_secret">libero</a>. Donec tincidunt id leo in ultrices. Duis nec ligula sodales, ultricies velit sit amet, consectetur arcu.<br/>
          Donec eleifend porta mauris, in tristique mauris elementum nec. In feugiat nisl ultricies tortor varius hendrerit. Cras eget tincidunt velit. Nunc sit amet lacus interdum, ultrices nulla et, imperdiet urna. Vestibulum semper dictum fringilla. Nulla tincidunt suscipit consectetur. Aenean sed justo erat. Nullam efficitur suscipit nisl vel gravida. Donec ullamcorper eros eget risus dapibus sodales. Aliquam erat volutpat. In vitae elit accumsan, scelerisque neque vitae, bibendum libero. Donec magna nulla, consectetur vel maximus quis, convallis sed turpis. Quisque accumsan lorem non erat commodo tincidunt. Vivamus nisi ante, venenatis id mauris quis, commodo consectetur eros.<br/>
          Fusce vulputate eros non orci venenatis, sed tempor sem scelerisque. Donec faucibus non quam ac aliquet. Donec eget tempor justo, nec accumsan urna. Aliquam dictum enim ut erat mattis semper. Nullam nec consectetur elit. Ut vel elit non eros rhoncus vehicula. Quisque fermentum erat lorem, maximus ornare elit aliquam feugiat.
        </p>

      </div>
    </div>
  </div>
<script src="/assets/js/enigme.js" charset="utf-8"></script>
</body>
</html>
