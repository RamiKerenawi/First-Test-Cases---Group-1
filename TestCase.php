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
   
    Public $CardNumber;
    Public $UsrcreditCard;
    Public $order_status;
    Public $payment;
    public $AuthcreditCard;
    public $request;
    public $response;
 
    /*
     * define global variables
     */
    /**
     * @param $payment
     */
     //test Auth
    Public function AuthCreditCard($Auth){

        // Create the payment data for a credit card
        /** @var TYPE_NAME $AuthcreditCard */
        $AuthcreditCard = new  CreditCardType();
        $UsrcreditCard->setCardNumber( "123456" );
        $this->assertEquals( '123456', $UsrcreditCard->getCredit() );
        $creditCard->setExpirationDate( "1/9/2016" );

        /** @var TYPE_NAME $CcreditCard */
        $CcreditCard->setCardCode( '123' );
        $this->assertEquals( '123', $CcreditCard->getCredit() );
    }
    
    //test sucessful Payment
        
        public function check_Payment() {

        $payment = new PaymentType();
        $payment->setCreditCard( $creditCard );

        $order_status = new OrderType();
        /** @var TYPE_NAME $order */
        $order_status->setDescription( ' Item' );

        $transactionRequestType = new  TransactionRequestType();
        $transactionRequestType->setTransactionType( "authTransaction" );
        $transactionRequestType->setOrder( $order_status );
        $transactionRequestType->setPayment( $payment );
        $request = new CreateTransactionRequest();
        $request->setTransactionRequest( $transactionRequestType );
        /** @var TYPE_NAME $controller */
        $controller = new  CreateTransactionController();
        $response = $controller->executeWithApiResponse( $response );
        $is_response_done = $this->createMock(PaymentGate::class);
         }
        /** @var TYPE_NAME $tresponse */

        /**
         *
         */
        // Create is_payment_done for the PaymentGate class.
        
        /** @var TYPE_NAME $tresponse */
        public function succes_Payment(){
        if ($response != null)
        {
            echo 'Your payment has been successful. ';
            //return true
        }
        else {
            if ($response->getErrors() != null) {
                echo " Error code  : " . $response->getErrors()[0]->getErrorCode() . "\n";
                echo $response->getErrors()[0]->getErrorText() . " Error message : " . "\n";
            }
            echo 'Payment has been Faild \n';
            //return fales
        }
    
    
}

// Rami


//use PHPUnit\Framework\TestCase;
//  Successful payment must change the Order status and send Email to the client


 {
    public function is_email_correct() {
        return true;
    }
}

 {
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
 
    public function setCreditCard ($Credit){
        $UsrcreditCard= new Credit();
        $UsrcreditCard->setCredit ($Credit);
    )
   }


 
    public function testUserCredit (){
        $UsrcreditCard = new Credit();
        $UsrcreditCard->setCredit('123456');
        $this->assertEquals('123456',$UsrcreditCard->getCredit());
    }
}
class Credit {
     var $UsrcreditCard ;
     public function setCredit($Cerdit){
        $UsrcreditCard = $Cerdit;
    }
    public function getCredit(){
        return $this-> $UsrcreditCard;
    }
}

class PaymentGate  {
    public function check_Payment() {
        // payment is done
        return true;
    }
    public function is_payment_done() {
        // payment is done
        return true;
    }
}

?>
