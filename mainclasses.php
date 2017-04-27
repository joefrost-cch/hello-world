<?php
namespace mainClass;
class dBaseFunctions {
  function dBaseConnect() {
     return NULL;
  }
}
$object = new \mainClass\dbaseFunctions;
echo json_encode($object->dbaseConnect());
?>
