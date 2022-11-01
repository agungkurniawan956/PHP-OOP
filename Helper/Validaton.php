<?php

function validateLoginRequest(loginrequest $request)
{
  if (!isset($request->username)) {
    throw new ValidationException("Username is Null");
  } else if (!isset($request->passwoard)) {
    throw new ValidationException("Password is null");
  } else if (trim($request->username) == "") {
    throw new Exception("username is empty");
  } else if (trim($request->passwoard) == "") {
    throw new Exception("pssword is empty");
  }
}
