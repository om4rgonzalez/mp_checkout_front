<script src="https://www.mercadopago.com/v2/security.js" view=""></script>
<h1><p>Pago Pendiente!</p></h1>
<br>

<?php

  $a = $_GET['collection_id'];
  $b = $_GET['collection_status'];
  $c = $_GET['external_reference'];
  $d = $_GET['payment_type'];
  $e = $_GET['preference_id'];
  $f = $_GET['site_id'];
  $g = $_GET['processing_mode'];
  $h = $_GET['merchant_account_id'];




  echo "collection_id: " . $a . "<br>";
  echo "collection_status: " . $b . "<br>";
  echo "external_reference: " . $c . "<br>";
  echo "payment_type: " . $d . "<br>";
  echo "preference_id: " . $e . "<br>";
  echo "site_id: " . $f . "<br>";
  echo "processing_mode: " . $g . "<br>";
  echo "merchant_account_id: " . $h . "<br>";

?>

<a href='https://bintelligence.net/jormendoza/'>Volver</a>
