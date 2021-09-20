<?php
class ProxyAuth implements IAuth
{
  private $account;

  function __construct($account)
  {
    $this->account = $account;
  }

  function solicitarAuth()
  {
    return $this->account->autenticar();
  }
}
?>
