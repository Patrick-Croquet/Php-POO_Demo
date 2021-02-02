<?php
 
class Kid {
 
  /* Age du kid
   *
   * @var int
   * @access private
   */
  private $age;
 
  /* Methode magique __get()
   *
   * Retourne la valeur de la propriété appelée
   *
   * @param string $property
   * @return int $age
   * @throws Exception
   */
  public function __get($property) {
 
    if('age' === $property) {
      return $this->age;
    } else {
      throw new Exception('Propriété invalide !');
    }
  }
 
  /**
   * Methode magique __set()
   *
   * Fixe la valeur de la propriété appelée
   *
   * @param string $property
   * @param mixed $value
   * @return void
   * @throws Exception
   */
  public function __set($property,$value) {
 
    if('age' === $property && ctype_digit($value)) {
      echo $this->age = (int) $value;
    } else {
      throw new Exception('Propriété ou valeur invalide !');
    }
  }
}

$child = new kid();

$child->__set('age','15');
$child->__get('age');
?>