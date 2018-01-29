<?php
class Conta
{
  public $numero;
  public $saldo;   // atributo do Objeto
  public static $contador = 0; // atributo da classe devido ao static

  // construtor
  function __construct()
  {
    // nao podemos fazer ($this->contador++:) assim porque o contador é da classe e $this se refere ao objeto
    // $this aponta para o objeto sendo criado: o que é do objeto? $numero e $saldo por isso não pode usar em $contador
    self::$contador++;
    $this->numero = self::$contador;
    // nao da certo porque o ++ executa apos atribuir a $x
    // $x = self::$contador++;
    // $this->numero = $x;
  }

  function deposita(float $valor)
  {
    $this->saldo += $valor;
  }

  // como a funcao não é da classe o $this se refere ao objeto que chamou a funcao
  function mostraDados()
  {
    echo "Mostra conta $this->numero tem:" . PHP_EOL;
    echo "Saldo: $this->saldo " . PHP_EOL;
  }
}
 ?>
