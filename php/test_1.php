<?php

class Cart{
  const PRICE_COLA = 5;
  const PRICE_BREAD = 2;
  const PRICE_WATER = 3;

  protected $products = array();

  public function add($product, $quantity)
  {
    $this->products[$product] = $quantity;
  }

  // получение колва продукта
  public function getQuantity($product){
    return isset($this->products[$product]) ? $this->products[$product] :  FALSE;

  }

  public function getTotal($tax){
    $total = 0.00;

    $callback = function($quantity, $product) use ($tax, & $total)
    {
        $pricePerItem = constant(__CLASS__. "::PRICE_". strtoupper($product));

        $total +=($pricePerItem * $quantity) * ($tax + 1.0);
      
    };

    array_walk($this->products, $callback);
    return round($total,2);

}


}

$cart = new Cart;

$cart->add('Cola', 5);
$cart->add('Bread', 1);
$cart->add('Water', 3);

print "<br />" . $cart->getTotal(0.05)." ---- gen cost";

?>