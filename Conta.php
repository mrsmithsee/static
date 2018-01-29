<?php

class Conta {
  public $numero;
  public $saldo; // atributo de objeto
  static public $cont=0; // atributo de classe

  private function __construct()    // private nao conseguimos criar o objeto por new
  {
    self::$cont++;
    $this->numero = self::$cont;
  }

  // static indica que é da classe e nao do objeto
  // o metodo criaConta sem o static é do objeto, mas o  objeto ainda nao existe
  // por isso precisa ser da classe e usamos static
  static function criaConta()
  {
    return new Conta();
  }
}
