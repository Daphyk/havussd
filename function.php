
<?php
/* is called when eio_nop () fineshed */
 function my_nop_cb($data, $result) {
  echo "my_nop ", $data, "\n";
 }

// This eio_nop() call will be cancelled
$req = eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "1");
var_dump($req);
eio_cancel($req);

// This time eio_nop() will be processed
eio_nop(EIO_PRI_DEFAULT, "my_nop_cb", "2");

// Process requests
eio_event_loop();
?>
