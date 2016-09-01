<?php

use PHPUnit\Framework\TestCase;


/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 30/08/16
 * Time: 14:01
 */
class successPayment extends TestCase
{
    /**
     * @param $amount
     */
    Public $CardNumber;
    Public $ExpirationDate;
    Public $CardCode;
    Public $order;
    Public $payment1;
    public $AuthcreditCard;
    public $request;
    public $response;
    public $controller;
    /*
     * define global variables
     */
    /**
     * @param $payment
     */
    Public function AuthCreditCard($payment){
        // Create the payment data for a credit card
        /** @var TYPE_NAME $AuthcreditCard */

        $AuthcreditCard = new  CreditCardType();
        $creditCard->setCardNumber("77777777777");
        $creditCard->setExpirationDate("1/9/2016");
        $creditCard->setCardCode('123');
        $payment1 = new PaymentType();
        $payment1->setCreditCard($creditCard);
        $order = new OrderType();
        /** @var TYPE_NAME $order */
        $order->setDescription('New Item');
        //create a transaction
        /** @var TYPE_NAME $transactionRequestType */
        $transactionRequestType = new  TransactionRequestType();
        $transactionRequestType->setTransactionType( "authTransaction");
        $transactionRequestType->setOrder($order);
        $transactionRequestType->setPayment($payment1);
        $request = new CreateTransactionRequest();
        $request->setRefId( $refId);
        $request->setTransactionRequest( $transactionRequestType);
        $controller = new  CreateTransactionController($request);
        $response = $controller->executeWithApiResponse($response);
        /** @var TYPE_NAME $tresponse */
        if ($response != null)
        {
            echo 'Your payment has been successful. ';
        }
        else {
            if ($response->getErrors() != null) {
                echo " Error code  : " . $response->getErrors()[0]->getErrorCode() . "\n";
                echo $response->getErrors()[0]->getErrorText() . " Error message : " . "\n";
            }
            echo 'Payment has been Faild \n';
        }
    }
}

// Rami


//use PHPUnit\Framework\TestCase;
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


    // User must be able to enter his credit card details
    //


/**
 * Created by PhpStorm.
 * User: Ghada
 * Date: 28/08/16
 * Time: 18:34
 */
public class usr  {
    /**
     * @param $Credit
     */
    public function setCreditCard ($Credit){
        $userCredit = new Credit();
        $userCredit->setCredit ($Credit);
    )
    }
}
class Credit {
    var $userCredit ;
    public function setCredit($Cerdit){
        $userCredit = $Cerdit;
    }
    public function getCredit(){
        return $this-> $userCredit;
    }
}
class userAuth extends TestClass
{
    public function testUserCredit (){
        $usrCredit = new Credit();
        $usrCredit->setCredit('123456');
        $this->assertEquals('123456',$usrCredit->getCredit());
    }
}

?>
