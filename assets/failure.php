<script src="https://www.mercadopago.com/v2/security.js" view=""></script>
<h1><p>Pago Fallido!</p></h1>
<br>

<?php

  $a = $_GET['collection_id'];
  $b = $_GET['collection_status'];
  $c = $_GET['external_reference'];
  $d = $_GET['payment_type'];
  $e = $_GET['preference_id'];
  $g = $_GET['processing_mode'];
  $h = $_GET['merchant_account_id'];
  $i = $_GET['merchant_order_id'];

  echo "collection_id: " . $a . "<br>";
  echo "collection_status: " . $b . "<br>";
  echo "external_reference: " . $c . "<br>";
  echo "payment_type: " . $d . "<br>";
  echo "preference_id: " . $e . "<br>";
  echo "processing_mode: " . $g . "<br>";
  echo "merchant_account_id: " . $h . "<br>";
  echo "merchant_order_id: " . $i . "<br>";

?>
<a href='https://bintelligence.net/jormendoza/'>Volver</a>
