<?php

class Order
{
    //Declare instance variables
    private $_food;
    private $_meal;
    private $_condiments;

    /** Default constructor
     * @param $food the food
     * @param $meal the meal
     * @param $condiments the condiments
     */
    public function __construct($food = "scrambled eggs",
                                $meal = "breakfast",
                                $condiments = array("salt", "pepper"))
    {
        $this->_food = $food;
        $this->_meal = $meal;
        $this->_condiments = $condiments;
    }

    /** toString() returns a String representation
     *  of an order object
     *  @return string
     */
    public function toString()
    {
        $out = $this->_food . ", ";
        $out .= $this->_meal . ", ";

        if (!empty($this->_condiments)) {
            $out .= implode(" & ", $this->_condiments);
        }

        return $out;
    }
}

$order = new Order("pizza", "lunch", array("parmesan", "red pepper flakes"));
echo $order->toString() . "<br>";
$order2 = new Order();
echo $order2->toString() . "<br>";
$order3 = new Order("tacos", "dinner");
echo $order3->toString() . "<br>";