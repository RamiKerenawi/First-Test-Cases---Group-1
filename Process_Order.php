<?php

use PHPUnit\Framework\TestCase;



//  Successful payment must change the Order status and send Email to the client

class PaymentGate extends TestCase {

    public function check_Payment() {
        // payment is done
        return true;
    }
    public function is_payment_done() {
        // payment is done
        return true;
    }

}

class validate_email extends  TestCase {
    public function is_email_correct() {

        return true;
    }
}
class PaymentTest extends TestCase {

    var $order_status = "";

    public function test_if_payment_is_successfull()
    {
        $payment =  new PaymentGate();
        //$user =     new User();
        //$user->username = "Rami";


        // Create is_payment_done for the PaymentGate class.
        $is_payment_done = $this->createMock(PaymentGate::class);

        //
        $is_payment_done->method('check_Payment')->willReturn(true);


        return $this->assertEquals(true,$payment->is_payment_done());

    }

    public function change_order_status_after_payment_is_done() {


        if ($this->test_if_payment_is_successfull()) {

            // Change Order status
            $this->order_status = "received";

        }

    }

    public  function test_if_order_status_if_received() {

        if ($this->order_status =="received") {
            return true;
        }
    }

    public function send_Email_if_payment_is_done() {

        if (test_if_order_status_if_received() ) {

            $this->send_email();

        }
    }

    public function send_email() {

        // send Email
    }

}

?>
