<?php

/**
 * Created by PhpStorm.
 * User: fariza
 * Date: 30/08/16
 * Time: 14:01
 */
class successPayment extends PHPUnit_Framework_TestCase
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
?>
