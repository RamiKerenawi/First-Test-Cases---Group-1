<?php

/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 30/08/16
 * Time: 13:16
 */
class Test extends PHPUnit_Framework_TestCase
{
    /**
     * @param $amount
     *
     *
     *
     *
     */



    /**
     * @param $amount
     */Public function AuthCreditCard($amount){



        // Create the payment data for a credit card
        /** @var TYPE_NAME $AuthcreditCard */
        $AuthcreditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber("77777777777");
        $creditCard->setExpirationDate("1/9/2016");
        $creditCard->setCardCode("123456");
        $payment1 = new AnetAPI\PaymentType();
        $payment1->setCreditCard($creditCard);
        $order = new AnetAPI\OrderType();
        $order->setDescription("New Item");
        //create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType( "authCaptureTransaction");
        $transactionRequestType->setAmount($amount);
        $transactionRequestType->setOrder($order);
        $transactionRequestType->setPayment($payment1);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setRefId( $refId);
        $request->setTransactionRequest( $transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);

    if ($response != null)
    {
        echo 'Your payment has been successful. ';
    }
    else{


        echo  'Payment has been Faild \n';

    }

}
}
?>
