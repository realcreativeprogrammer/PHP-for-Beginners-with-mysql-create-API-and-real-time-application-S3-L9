<?php
trait tr1{
    public function message1(){
        echo 'iam in trait1 and message 1 <br>';
    }
}

trait tr2{
    public function message2(){
        echo 'iam in meessage2 and trait2 <br>';
    }
}
class Message{
    use tr1,tr2;
}

$obj=new Message();
$obj->message1();
$obj->message2();

?>