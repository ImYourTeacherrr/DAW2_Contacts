<?php
class MessageInABottle {
    private $text;
  
    public function __construct() {
        
    }
    public function setMessage($msg){
        $this->text = $msg;
    }
    public function addToMessage($msg){
        $this->text= $this->getMessage() . $msg;
    }
    public function getMessage() {
        return $this->text;
    }
    public function __toString() {
        return "{Message inside}: {$this->text}";
    }
}

//////////////////////////////////////////////////
$m1=new MessageInABottle();
$m1->setMessage("Este es el mensage");
$m1->addToMessage("hola--")


$m2=new MessageInABottle();
$m2->setMessage("hhh");


echo "<br>";


echo $m1->getMessage()." - ".$m2->getMessage();

?>