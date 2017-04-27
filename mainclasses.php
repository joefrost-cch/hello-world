<?php
namespace mainClass;
class dBaseFunctions {
  function dBaseConnect() {
     return NULL;
  }
}
$object = new \mainClass\dbaseFunctions;
echo json_encode($object->dbaseConnect());


$checkMatch = "a12111Ha1";

// preg_match uppercase [A-Z], numeral (\d)
if (!preg_match("/^(?=.*[A-Z])(?=.*\d).+$/",$checkMatch)) {
	echo "incorrect";
} else {
	
}
?>
