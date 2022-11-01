<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validaton.php";

$loginRequest = new loginrequest();
$loginRequest->username = " ";
$loginRequest->passwoard = "  ";

try {
  validateLoginRequest($loginRequest);
  echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
  echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;

  var_dump($exception->getTrace());

  echo $exception->getTraceAsString() . PHP_EOL;
} finally {
  echo "Apapun yang Terjadi akan Tetap Di eksekusi" . PHP_EOL;
}
